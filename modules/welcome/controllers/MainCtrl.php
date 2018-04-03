<?php 

namespace app\modules\welcome\controllers;

use micro\Controller;
use app\model\Content;

class MainCtrl extends Controller 
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
    }
    
}
