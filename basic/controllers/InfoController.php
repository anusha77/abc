<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Info;

class InfoController extends Controller
{
    public function actionIndex()
    {
        
        $query = Info::find();
        
        
        $infos = $query->orderBy('title')
            
            
            ->all();

        return $this->render('index', [
            'infos' => $infos,
            
        ]);
    }
}