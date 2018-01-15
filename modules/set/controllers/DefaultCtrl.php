<?php 

namespace app\modules\set\controllers;

use micro\Controller;
use app\model\Content;

class DefaultCtrl extends Controller 
{
    
    public function index() 
    {
        $condition = [
            ['=', 'type', 'set']
        ];
        
        $models = Content::find()->where($condition)->all();
        
        return $this->render('index', [
            'models' => $models
        ]);
    }
    
    public function create() 
    {   
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {            
            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $form = json_encode(array_keys($_POST['form']));
            
            $content = new Content();
            $content->title = $title;
            $content->type = 'set';
            $content->body = $form;
            $content->uniqid = uniqid();
            $content->save();
            
            $this->gotoHome();
        }
        
        $condition = [
            ['=', 'type', 'form']
        ];
        
        $models = Content::find()->where($condition)->all();
            
        return $this->render('create', [
            'models' => $models
        ]);
    }
    
    public function update($id) 
    {
        $condition = [
            ['=', 'id', $id]
        ];
        
        $model = Content::find()->where($condition);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $form = json_encode(array_keys($_POST['form']));
            
            $model->title = $title;
            $model->type = 'set';
            $model->body = $form;
            $model->save();
            
            $this->gotoHome();
        }
        
        $condition = [
            ['=', 'type', 'form']
        ];
        
        $set = $model->one();
        $models = Content::find()->where($condition)->all();

        return $this->render('update', [
            'models' => $models,
            'forms' => json_decode($set->body),
            'set' => $set
        ]);
    }
    
    public function delete($id)
    {
        $condition = [
            ['=', 'id', $id]
        ];
        
        Content::find()->where($condition)->delete();
        
        $this->gotoHome();
    }
    
    private function gotoHome() 
    {
        header("Location: index.php?r=set/default/index");
        exit();
    }
    
}