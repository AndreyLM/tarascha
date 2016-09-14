<?php
namespace frontend\widgets\gallery;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class Gallery extends Widget
{
    public $items = [];
    public $caption;

    public function init()
    {
        parent::init();
        $this->view->registerCssFile('//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
        $this->view->registerCssFile('//blueimp.github.io/Gallery/css/blueimp-gallery.min.css');
        $this->view->registerCssFile('@web/css/gallery.css');


    }

    public function run()
    {

        $html = Html::beginTag('div', ['id' => 'blueimp-gallery', 'class' => 'blueimp-gallery blueimp-gallery-controls']);

        $html .= Html::beginTag('div', ['class' => 'slides']);
        $html .= Html::endTag('div');

        $html .= Html::beginTag('h3', ['class' => 'title']);
        $html .= Html::endTag('h3');

        $html .= Html::beginTag('a', ['class' => 'prev']);
        $html .= '<';
        $html .= Html::endTag('a');

        $html .= Html::beginTag('a', ['class' => 'next']);
        $html .= '>';
        $html .= Html::endTag('a');

        $html .= Html::beginTag('a', ['class' => 'close']);
        $html .= 'X';
        $html .= Html::endTag('a');

        $html .= Html::beginTag('a', ['class' => 'play-pause']);
        $html .= Html::endTag('a');

        $html .= Html::beginTag('ol', ['class' => 'indicator']);
        $html .= Html::endTag('ol');

        $html .= Html::beginTag('div', ['class' => 'modal fade']);
        $html .= Html::beginTag('div', ['class' => 'modal-dialog']);
        $html .= Html::beginTag('div', ['class' => 'modal-content']);

        $html .= Html::beginTag('div', ['class' => 'modal-header']);
        $html .= Html::button('&times;', ['class' => 'close', 'aria-hidden' => 'true']);
        $html .= Html::beginTag('h4', ['class' => 'modal-title']);
        $html .= Html::endTag('h4');
        $html .= Html::endTag('div');

        $html .= Html::beginTag('div', ['class' => 'modal-body next']);
        $html .= Html::endTag('div');

        $html .= Html::beginTag('div', ['class' => 'modal-footer']);
        $html .= Html::button('<i class="glyphicon glyphicon-chevron-left"></i> Previous',
            ['class' => 'btn btn-default pull-left prev']);
        $html .= Html::button('<i class="glyphicon glyphicon-chevron-next"></i> Next',
            ['class' => 'btn btn-primary next']);

        $html .= Html::endTag('div');


        $html .= Html::endTag('div');
        $html .= Html::endTag('div');
        $html .= Html::endTag('div');


        $html .= Html::endTag('div');

        $html .= Html::beginTag('div', ['id' => 'links']);

        foreach ($this->items as $item) {
            $url = Yii::$app->request->hostInfo . '/backend/web/galleries/' . $item['galleryId'] . '/' . $item['file'];
            $html .= Html::beginTag('a', ['href' => $url, 'data-gallery' => '']);

            $html .= Html::beginTag('div', ['class' => 'col-lg-3 col-md-4 col-sm-6 col-xs-12']);


            $html .= Html::beginTag('div', ['class' => 'gallery-thumb-img',
                'style' => "background: url(".$url.") no-repeat center;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;"]);

            $html .= Html::beginTag('div', ['class' => 'gallery-thumb-caption']);
            if(isset($this->caption)) {
                $html .= '<h4>' . $this->caption . '</h4>';
            } else {
                $html .= '<h4>' . $item['caption'] . '</h4>';
            }

            $html .= Html::endTag('div');
            $html .= Html::endTag('div');

            $html .= Html::endTag('div');
            $html .= Html::endTag('a');

        }

        $html .= Html::endTag('div');


        echo $html;
        $this->view->registerJsFile('//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
        $this->view->registerJsFile('//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js');
        // $this->view->registerJsFile('@frontend/widgets/gallery/js/bootstrap-image-gallery.min.js');
    }
}