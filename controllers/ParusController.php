<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of ParusController
 *
 * @author parusopen
 */
class ParusController extends \yii\web\Controller{
     public function actionIndex(){
        $hi = 'Привет';
        return $this->render('index');
    }
}
