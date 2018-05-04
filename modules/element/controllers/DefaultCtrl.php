<?php 

namespace app\modules\element\controllers;

use micro\Controller;
use micro\form\Builder;
use app\model\Content;

class DefaultCtrl extends Controller 
{
    
    public function index() 
    {
        $condition = [
            ['=', 'type', Content::ELEMENT]
        ];
        
        $models = Content::find()->where($condition)->all();
        
        return $this->render('index', [
            'models' => $models
        ]);
        
    }
    
    public function create()     
    {
        $model = new Content();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $body = $_POST['body'];
            
            $builder = new Builder();
            $validator = $builder->validateSchema($body);
            
            $model->title = $title;
            $model->type = Content::ELEMENT;
            $model->body = $body;
            $model->uniqid = uniqid();
            
            if ($validator->isValid()) {      
                $model->save();                
                $this->gotoHome();
            }
            
            Content::$hasError = true;
        }
        
        return $this->render('create', [
            'model' => $model
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
            $body = $_POST['body'];
            
            $builder = new Builder();
            $validator = $builder->validateSchema($body);
            
            $model->title = $title;
            $model->type = Content::ELEMENT;
            $model->body = $body;
            
            if ($validator->isValid()) { 
                $model->save();
                $this->gotoHome();
            }
            
            Content::$hasError = true;
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
        header("Location: index.php?r=element/default/index");
        exit();
    }
}