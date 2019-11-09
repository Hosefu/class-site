<?php


namespace app\controllers;


use yii\web\Controller;

class MyController extends Controller
{

    public function actionIndex($years = null)
    {
        $arr = array(
            'name' => 'George',
            'surname' => 'Taranets',
            'years' => $years,
        );

        return $this->render('index', compact('arr'));
    }

}