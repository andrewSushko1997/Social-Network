<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18.02.2018
 * Time: 21:33
 */

namespace app\controllers;



use yii\web\Controller;

class ProfileController extends Controller
{
    public function actionUser() {
        return $this->render('user');
    }
}