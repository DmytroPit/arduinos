<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!--Хедер-->
<div class="leftHeader">
    <a class="logo" href=<?php echo Url::home() ?>><img src="themes/basic/img/logo.png" alt="Logo"></a>
    <h1 class="font-1"><a href=<?php echo Url::home() ?>>Maxx<span>Cam</span></a></h1>
    <h2 class="font-2"><a href=<?php echo Url::home() ?>>A Picture Perfect Camera Store</a></h2>
    <a href="#" class="basketCount" onclick="show_func()">30</a>
</div>
<nav>
    <ul class="upperList">
        <li><a href="#">Home</a></li>
        <li><a href="#">Digital Cameras</a></li>
        <li><a href="#">Lenses &amp; Accessories</a></li>
        <li><a href="#">Contact Us</a>
            <ul class="lowerList">
                <li><a href="#">FAQ</a></li> <!-- Li elements complete -->
                <li><a href="#">FAQ</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </li>
    </ul>
</nav>f
<span class="phone"><?php echo $phone = \Yii::$app->params['phone'];?> </span> <!-- This is not li -->
<div class="clear"></div>


<div class="wrap">


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>




<!--<footer class="footer">-->
<!--    <div class="container">-->
<!--        <p class="pull-left">&copy; My Company --><?//= date('Y') ?><!--</p>-->
<!---->
<!--        <p class="pull-right">--><?//= Yii::powered() ?><!--</p>-->
<!--    </div>-->
<!--</footer>-->
<div class="footer">

    <div class="contacts">
        <h3>Contact Us</h3>
        <p><?php echo $phone = \Yii::$app->params['address'];?><br />
            <?php echo $phone = \Yii::$app->params['phoneNumber'];?><br />
            <?php echo $phone = \Yii::$app->params['email'];?> </p>
        <div class="socials">
            <a href="#"><img src="themes/basic/img/twitter.png" height="32" width="32" alt="twitter"></a>
            <a href="#"><img src="themes/basic/img/facebook.png" height="32" width="32" alt="facebook"></a>
            <a href="#"><img src="themes/basic/img/google_plus.png" height="32" width="32" alt="google+"></a>
            <a href="#"><img src="themes/basic/img/instagram.png" height="32" width="32" alt="instagram"></a>
        </div>
    </div>

    <div class="customerService">
        <h3>Customer Service</h3>
        <a href="#">Contacts Us ></a> <span>/</span>
        <a href="#">Shipping ></a>
        <br />
        <a href="#">Returnes ></a> <span>/</span>
        <a href="#">Payment &amp; Warranty ></a>
    </div>

    <div class="payCard">
        <h3>We Accept</h3>
        <img src="themes/basic/img/mCard.png" height="26" width="42" alt="Master Card">
        <img src="themes/basic/img/visa.png" height="26" width="42" alt="Visa">
    </div>

    <p class="down">@ <?= date('Y'), $phone = \Yii::$app->params['info'];?> <a href="#">Wix.com</a></p>

</div>
</div>

<div class="mask-content" onclick="close_func()"></div>


<div id="inBasket">

    <div class="headerBasket">
        <h1>Корзина</h1>
        <div class="closeBasket" onclick="close_func()">
            <a href="#" title="Закрыть корзину"><img src="themes/basic/img/closeBasket.png" height="39" width="33" alt=""></a>
        </div>
    </div>

    <div class="product-basket-scroll-hide">
        <div class="productBasket">
            <ul>
                <li>
                    <div class="product-img"><img src="themes/basic/img/slot1.jpg" height="500" width="500" alt=""></div>
                    <div class="product-info">
                        <span class="name-product">I'm a product</span>
                        <span>КОЛИЧЕСТВО: 14</span>
                        <span>$19.99</span>
                    </div>
                    <div class="product-delete">
                        <a href="#" title="Удалить из корзины"></a>
                    </div>
                </li>
                <li>
                    <div class="product-img"><img src="themes/basic/img/slot3.jpg" height="500" width="500" alt=""></div>
                    <div class="product-info">
                        <span class="name-product">I'm a product</span>
                        <span>КОЛИЧЕСТВО: 14</span>
                        <span>$19.99</span>
                    </div>
                    <div class="product-delete">
                        <a href="#" title="Удалить из корзины"></a>
                    </div>
                </li>
                <li>
                    <div class="product-img"><img src="themes/basic/img/slot2.jpg" height="500" width="500" alt=""></div>
                    <div class="product-info">
                        <span class="name-product">I'm a product</span>
                        <span>КОЛИЧЕСТВО: 14</span>
                        <span>$19.99</span>
                    </div>
                    <div class="product-delete">
                        <a href="#" title="Удалить из корзины"></a>
                    </div>
                </li>
                <li>
                    <div class="product-img"><img src="themes/basic/img/slot1.jpg" height="500" width="500" alt=""></div>
                    <div class="product-info">
                        <span class="name-product">I'm a product</span>
                        <span>КОЛИЧЕСТВО: 14</span>
                        <span>$19.99</span>
                    </div>
                    <div class="product-delete">
                        <a href="#" title="Удалить из корзины"></a>
                    </div>
                </li>
                <li>
                    <div class="product-img"><img src="themes/basic/img/slot3.jpg" height="500" width="500" alt=""></div>
                    <div class="product-info">
                        <span class="name-product">I'm a product</span>
                        <span>КОЛИЧЕСТВО: 14</span>
                        <span>$19.99</span>
                    </div>
                    <div class="product-delete">
                        <a href="#" title="Удалить из корзины"></a>
                    </div>
                </li>
                <li>
                    <div class="product-img"><img src="themes/basic/img/slot3.jpg" height="500" width="500" alt=""></div>
                    <div class="product-info">
                        <span class="name-product">I'm a product</span>
                        <span>КОЛИЧЕСТВО: 14</span>
                        <span>$19.99</span>
                    </div>
                    <div class="product-delete">
                        <a href="#" title="Удалить из корзины"></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="footerBasketAbsolute">
        <div class="footerBasketTotalPrice">
            <span>Сумма</span>
            <span>$000.00</span>
        </div>
        <div class="goToBasket"><a href=<?php echo Url::toRoute(['/site/order']) ?>>Перейти в корзину</a></div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
