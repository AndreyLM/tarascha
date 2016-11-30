<?php
namespace frontend\controllers;

use common\models\Category;
use common\models\LegalDocuments;
use common\models\Video;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Article;
use common\models\Announce;
use common\models\Menu;
use yii\web\NotFoundHttpException;
use sadovojav\gallery\models\GalleryFile;
use sadovojav\gallery\models\Gallery;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public $layout = "main2.php";

    public function actionMainLayout()
    {
        $this->layout = "main2.php";
        return $this->render('index');
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {

        $ann = Announce::find()->all();

        foreach ($ann as $announce) {
            $arr = [];
            $article = Article::findOne(['id' => $announce->article_id]);
            $arr['img'] = strip_tags($article->img);
            $arr['title'] = $article->title;
            $arr['slug'] = $article->slug;
            $this->view->params['ann_articles'][] = $arr;
        }


        $tar = Article::find()->where(['category_id' => 4, 'isFavorite' => 1, 'isActive' => 1])->orderBy('created_at DESC')->all();
        $kiev = Article::find()->where(['category_id' => 6, 'isFavorite' => 1, 'isActive' => 1])->orderBy('created_at DESC')->all();

        return $this->render('index', ['tar' => $tar, 'kiev' => $kiev]);
    }

    public function actionArticle($slug)
    {
        $this->layout = "article_layout.php";


        if (($model = Article::findOne(['slug' => $slug])) !== null) {
            return $this->render('article', ['model' => $model]);
        } else {
//            echo 'The requested page wasn\'t found';
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSearch()
    {
        $this->layout = "article_layout.php";

        $search = \Yii::$app->request->getQueryParam('srch-term');

        if (($query = Article::find()->orWhere(['like', 'title', $search])->orderBy('created_at DESC')) !== null) {
            $countQuery = clone $query;
            $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 9]);
            $models = $query->offset($pages->offset)
                ->limit($pages->limit)
                ->all();

            return $this->render('search', ['models' => $models, 'pages' => $pages]);
        } else {
//            echo 'The requested page wasn\'t found';
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionArticles($id)
    {
        $this->layout = "article_layout.php";


        if (($query = Article::find()->where(['category_id' => $id])->orderBy('created_at DESC')) !== null) {
            $countQuery = clone $query;
            $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 9]);
            $models = $query->offset($pages->offset)
                ->limit($pages->limit)
                ->all();

            return $this->render('articles', ['models' => $models, 'pages' => $pages]);
        } else {
            echo 'The requested page wasn\'t found';
        }
    }

    public function actionDocuments()
    {
        $this->layout = "article_layout.php";
        $result = '';
        $matches = [];

        if (Yii::$app->request->isPost) {
            if (isset($_POST['title']) && isset($_POST['type']) && isset($_POST['year']) && isset($_POST['month'])) {
                $model = $this->searchDocuments($_POST['type'], $_POST['year'], $_POST['month']);
                foreach ($model as $docum) {
                    $result .= $docum->title;
                }
                preg_match_all('/<a.*>.*' . $_POST['title'] . '.*<\/a>/', $result, $matches);
                $session = Yii::$app->session;
                $session->set('title', $_POST['title']);
                $session->set('type', $_POST['type']);
                $session->set('year', $_POST['year']);
                $session->set('month', $_POST['month']);
                $session->set('documents', $matches);

            } else {
                $result = "Введіть текст для пошуку, а також виберіть критерії пошуку";
            }
        } elseif (null !== Yii::$app->session->get('documents') ) {

            $matches = Yii::$app->session->get('documents');

        } else {
            $model = $this->searchDocuments('Всі документи', 0, 0);
            foreach ($model as $docum) {
                $result .= $docum->title;
            }
            preg_match_all('/<a.*>.*.*<\/a>/', $result, $matches);
        }


        $pages = new Pagination();

        if (isset($matches[0])) {

            $pages->totalCount = count($matches[0]);
            $pages->pageSize = 20;
            $pages->pageSizeParam = false;
            $model = array_slice($matches[0], $pages->offset, $pages->pageSize);
            $result = '';
            $i = 1+$pages->getPage()*$pages->pageSize;
            foreach ($model as $match) {
                $result .= '<b>' . $i++. ')</b>&nbsp;&nbsp;&nbsp;' . $match . '</br></br>';
            }
        }


        return $this->render('documents', [
            'model' => $result,
            'pages' => $pages,
        ]);
    }

    private function searchDocuments($type, $year, $month)
    {

        $query = LegalDocuments::find();

        if ($year != '0') {
            $query->andFilterWhere(['like', 'year', $year]);
        }

        if ($month != '0') {
            $query->andFilterWhere(['like', 'month', $month]);
        }


        if ($type != 'Всі документи') {
            $query->andFilterWhere(['like', 'type', $type]);
        }

        return $query->all();
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        $this->layout = 'main';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('/site/index');
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->actionIndex();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->renderAjax('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionGallery($id)
    {
        $this->layout = "article_layout.php";

        $model = GalleryFile::find()->where(['galleryId' => $id])->orderBy('position')->asArray()->all();
        $title = Gallery::find()->where(['id' => $id])->one();

        return $this->render('gallery', ['model' => $model, 'title' => $title->name]);
    }


    public function actionGalleries()
    {
        $this->layout = "article_layout.php";

        $model = Gallery::find()->where(['status' => 1])->all();
        return $this->render('galleries', ['model' => $model, 'title' => 'Фотогалерея']);
    }

    public function actionVideo()
    {
        $this->layout = "article_layout.php";
        $model = Video::find()->all();
        return $this->render('video', ['model' => $model]);
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $this->layout = 'main';
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }


    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */


    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
