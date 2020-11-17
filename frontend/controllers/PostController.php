<?php


namespace frontend\controllers;

use frontend\controllers\ShopController;

class PostController extends ShopController
{
    public function actionIndex(){
        return $this->render('index');
    }
    public function actionCart(){
        return $this->render('cart');
    }
    public function actionShop(){
        return $this->render('shop');
    }
    public function actionProduct(){
        return $this->render('product');
    }
    public function actionCheckout(){
        return $this->render('checkout');
    }

}