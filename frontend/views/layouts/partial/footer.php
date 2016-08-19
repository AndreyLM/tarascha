<?php
    use yii\helpers\Url;
?>
<div class="container-fluid main_footer">
    <div class="row">
        <div class="col-md-5">
            <p class="text-right text-uppercase text_footer">09500, м.Тараща, Київська область, вул. Героїв Чорнобиля
                1<br>
                10rda-tarascha@ukr.net</p>
        </div>
        <div class="col-md-2"><p align="center"><img src="<?= Url::to("@web/img/gerb.png") ?>"></p></div>
        <div class="col-md-5">
            <p class="text-left text-uppercase text_footer">09500, 1,st.Goroyiv Chornobilya, Kiev Region<br>
                10rda-tarascha@ukr.net</p></div>
    </div>
</div>
<?= 'Footer' ?>