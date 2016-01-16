<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Order';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="wrapper">
    <!-- Начало блока content -->
    <div class="insidePageThree">
        <div class="basketOptions">
            <h3>Моя корзина (30)</h3>
            <a href="#" class="order">Оформить заказ</a>
        </div>

        <div class="attributes clear">
            <p class="firstAttr">Товар</p>
            <p class="secondAttr">Наименование</p>
            <p class="thirdAttr">Количество</p>
            <p class="fourthAttr">Итого</p>
        </div>

        <div class="clear"></div>

        <ul>
            <li>
                <div class="product-image"><img src="themes/basic/img/slot2.jpg" height="500" width="500" alt=""></div>
                <div class="product-name">
                    <p class="prod">I'm a product</p>
                    <p>Артикул: 0012</p>
                    <p class="price">Цена: $19.99</p>
                    <a href="#">Удалить из корзины</a>
                </div>
                <div class="product-counter">counter</div>
                <div class="total-price">$59.97</div>
            </li>

            <li>
                <div class="product-image"><img src="themes/basic/img/slot2.jpg" height="500" width="500" alt=""></div>
                <div class="product-name">
                    <p class="prod">I'm a product</p>
                    <p>Артикул: 0012</p>
                    <p class="price">Цена: $19.99</p>
                    <a href="#">Удалить из корзины</a>
                </div>
                <div class="product-counter">counter</div>
                <div class="total-price">$59.97</div>
            </li>

            <li>
                <div class="product-image"><img src="themes/basic/img/slot2.jpg" height="500" width="500" alt=""></div>
                <div class="product-name">
                    <p class="prod">I'm a product</p>
                    <p>Артикул: 0012</p>
                    <p class="price">Цена: $19.99</p>
                    <a href="#">Удалить из корзины</a>
                </div>
                <div class="product-counter">counter</div>
                <div class="total-price">$59.97</div>
            </li>
        </ul>

        <div class="amount">
            <a href="#">Добавить сообщение продавцу</a>
            <p>Сумма: $199.90</p>
            <p>Скидка, налог и цена доставки будут рассчитаны при оформлении <br />заказа.</p>
        </div>

        <div class="footerContent clear">
            <img src="themes/basic/img/ssl.png" height="98" width="354" alt="">
            <a href="#" class="order">Оформить заказ</a>
        </div>
    </div>

    <!-- Конец блока content -->
</div>
