
<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Страница товара';
?>

<!--<div class="site-index">-->
<!---->
<!--    <div class="jumbotron">-->
<!--        <h1>Congratulations!</h1>-->
<!---->
<!--        <p class="lead">You have successfully created your Yii-powered application.</p>-->
<!---->
<!--        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
<!--    </div>-->
<!---->
<!--    <div class="body-content">-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-lg-4">-->
<!--                <h2>Heading</h2>-->
<!---->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et-->
<!--                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
<!--                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
<!--                    fugiat nulla pariatur.</p>-->
<!---->
<!--                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>-->
<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!--                <h2>Heading</h2>-->
<!---->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et-->
<!--                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
<!--                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
<!--                    fugiat nulla pariatur.</p>-->
<!---->
<!--                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>-->
<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!--                <h2>Heading</h2>-->
<!---->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et-->
<!--                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
<!--                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
<!--                    fugiat nulla pariatur.</p>-->
<!---->
<!--                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</div>-->
<!-- Начало блока content -->
<div class="wrapper">
<div class="insidePageOne">
    <h3>Digital Cameras</h3>

    <ul class="inventory">

        <li> <!-- This is li elements -->
            <a href=<?php echo Url::toRoute(['/details']) ?>><img src="themes/basic/img/slot1.jpg" height="500" width="500" alt=""></a>
            <a href=<?php echo Url::toRoute(['/details']) ?>>I'm a product</a>
            <div class="sale">$19.99</div>
        </li>

        <li>
            <a href=<?php echo Url::toRoute(['/site/details']) ?>><img src="themes/basic/img/slot2.jpg" height="500" width="500" alt=""></a>
            <a href=<?php echo Url::toRoute(['/site/details']) ?>>I'm a product</a>
            <div class="sale">$19.99</div>
        </li>

        <li>
            <a href=<?php echo Url::toRoute(['/site/details']) ?>><img src="themes/basic/img/slot3.jpg" height="500" width="500" alt=""></a>
            <a href=<?php echo Url::toRoute(['/site/details']) ?>>I'm a product</a>
            <div class="sale">$19.99</div>
        </li>

        <li>
            <a href=<?php echo Url::toRoute(['/site/details']) ?>><img src="themes/basic/img/slot4.jpg" height="500" width="500" alt=""></a>
            <a href=<?php echo Url::toRoute(['/site/details']) ?>>I'm a product</a>
            <div class="sale">$19.99 <span class="lineThrough">$14.99</span></div>
        </li>

        <li>
            <a href=<?php echo Url::toRoute(['/site/details']) ?>><img src="themes/basic/img/slot3.jpg" height="500" width="500" alt=""><span class="new">New!</span></a>
            <a href="#">I'm a product</a>
            <div class="sale">$19.99</div>
        </li>

        <li>
            <a href=<?php echo Url::toRoute(['/site/details']) ?>><img src="themes/basic/img/slot1.jpg" height="500" width="500" alt=""></a>
            <a href=<?php echo Url::toRoute(['/site/details']) ?>>I'm a product</a>
            <div class="sale">$19.99</div>
        </li>

        <li>
            <a href=<?php echo Url::toRoute(['/site/details']) ?>><img src="themes/basic/img/slot4.jpg" height="500" width="500" alt=""></a>
            <a href=<?php echo Url::toRoute(['/site/details']) ?>>I'm a product</a>
            <div class="sale">$19.99</div>
        </li>

        <li>
            <a href=<?php echo Url::toRoute(['/site/details']) ?>><img src="themes/basic/img/slot2.jpg" height="500" width="500" alt=""></a>
            <a href=<?php echo Url::toRoute(['/site/details']) ?>>I'm a product</a>
            <div class="sale">$19.99</div>
        </li>
    </ul>
</div>
<div class="clear"></div>
</div>

<!-- Конец блока content -->