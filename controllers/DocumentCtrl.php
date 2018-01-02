<?php 

namespace app\controller;

use micro\Controller;
use app\model\Content;

class DocumentCtrl extends Controller 
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
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $body = json_encode($_POST);
            
            $content = new Content();
            $content->title = $title;
            $content->type = 'document';
            $content->body = $body;
            $content->save();
            
            $this->gotoHome();
        }
        
        
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
            'set' => $set,
            'forms' => $forms
        ]);
    }
    
    public function update($id) {
        $condition = [
            ['=', 'id', $id]
        ];
        
        $model = Content::find()->where($condition)->one();
        $body = json_decode($model->body);
        
        return $this->render('update', [
            'model' => $model,
            'set' => $body->set,
            'body' => $body
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
        header("Location: index.php?r=document");
        exit();
    }
    
}