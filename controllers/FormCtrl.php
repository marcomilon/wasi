<?php 

namespace app\controller;

use micro\Controller;
use app\model\Content;

class FormCtrl extends Controller 
{
    
    public function index() 
    {
        $condition = [
            ['=', 'type', 'form']
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
            $body = $_POST['body'];
            
            $content = new Content();
            $content->title = $title;
            $content->type = 'form';
            $content->body = $body;
            $content->uniqid = uniqid();
            $content->save();
            
            $this->gotoHome();
        }
        
        return $this->render('create');
        
    }
    
    public function update($id) 
    {
        $condition = [
            ['=', 'id', $id]
        ];
        
        $model = Content::find()->where($condition);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $body = $_POST['body'];
            
            $model->title = $title;
            $model->type = 'form';
            $model->body = $body;
            $model->save();
            
            $this->gotoHome();
        }
        
        return $this->render('update', [
            'model' => $model->one()
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
        header("Location: index.php?r=form");
        exit();
    }
}