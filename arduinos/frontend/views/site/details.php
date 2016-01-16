<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Details';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Начало блока content -->

<div class="insidePageTwo">

    <div class="zoom">
        <img src="themes/basic/img/slot1.jpg" height="500" width="500" alt="">

        <div class="smallPic">
            <img src="themes/basic/img/slot1.jpg" height="500" width="500" alt="">
        </div>

        <div class="smallPic2">
            <img src="themes/basic/img/zoom_slot1.jpg" height="498" width="498" alt="">
        </div>

        <p class="upperSmall">I'm a product description. I’m a great place to include more information about your product. Buyers like to know what they’re getting before they purchase.</p>

    </div>
    <div class="product">
        <h3>I'm a product</h3>
        <p class="article">Артикул: 0012</p>
        <p class="price">$19.99</p>
        <p class="quantity">Количество</p>

        <select name="select" id="select">
            <option value="1" >1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>

        <div class="addToBasket" onclick="add_func()"><a href="#">Добавить в корзину</a></div>

        <div class="info hider">
            <h4>Product Info</h4>
            <p>I'm a product detail. I'm a great place to add more information about your product such as sizing, material, care and cleaning instructions. This is also a great space to write what makes this product special and how your customers can benefit from this item. Buyers like to know what they’re getting before they purchase, so give them as much information as possible so they can buy with confidence and certainty.</p>
        </div>

        <div class="policy hider">
            <h4>Return and refund policy</h4>
            <p>I’m a Return and Refund policy. I’m a great place to let your customers know what to do in case they are dissatisfied with their purchase. Having a straightforward refund or exchange policy is a great way to build trust and reassure your customers that they can buy with confidence.</p>
        </div>
    </div>
</div>
<div class="clear"></div>

<!-- Конец блока content -->

