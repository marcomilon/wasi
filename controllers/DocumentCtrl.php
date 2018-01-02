<?php 

namespace app\controller;

use micro\Controller;
use app\model\Content;

class DocumentCtrl extends Controller 
{
    
    public function index() 
    {
        return $this->render('index');
    }
    
    public function set() 
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $set = filter_input(INPUT_POST, 'set', FILTER_SANITIZE_NUMBER_INT);
            
            header("Location: index.php?r=document/create&set=$set");
            exit();
        }
        
        $condition = [
            ['=', 'type', 'set']
        ];
        
        $models = Content::find()->where($condition)->all();
        
        return $this->render('set', [
            'models' => $models
        ]);
    }
    
    public function create($set) {
        $condition = [
            ['=', 'id', $set]
        ];
        
        $model = Content::find()->where($condition)->one();
        $sets = json_decode($model->body);
        
        $forms = [];
        foreach($sets as $form) {
            $condition = [
                ['=', 'id', $form]
            ];
            
            $model = Content::find()->where($condition)->one();
            $forms[] = $model->body;
        }
                
        return $this->render('create', [
            'forms' => $forms
        ]);
    }
    
}