<?php 

namespace app\controllers;

use micro\Controller;
use app\model\Content;

class DefaultCtrl extends Controller 
{
    
    public function index() 
    {
        $condition = [
            ['=', 'type', 'document']
        ];
        
        $models = Content::find()->where($condition)->all();
        
        return $this->render('index', [
            'models' => $models
        ]);
        
        return $this->render('index', [
            'models' => $models
        ]);
    }
    
}
