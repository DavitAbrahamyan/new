<?php
namespace frontend\widget;

use yii\base\Widget;

class ShopWidget extends Widget
{
    public function run(){

        return $this->render('shop');
        //return $this->render('cart');
    }
}