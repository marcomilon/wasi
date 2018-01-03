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
            unset($_POST['title']);
            $body = json_encode($_POST);
            
            $content = new Content();
            $content->title = $title;
            $content->type = 'document';
            $content->body = $body;
            $content->save();
            
            $this->gotoHome();
        }
        
        $forms = $this->getForms($set);
        
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
        $body = json_decode($model->body, true);
        $set = $body['set'];
        unset($body['set']);
        
        $values = array_values($body);
        
        $forms = $this->getForms($sets);
                
        return $this->render('update', [
            'set' => $set,
            'forms' => $forms,
            'values' => $values
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
    
    private function getForms($set) 
    {
        $sets = $this->getSets($set);
        
        $forms = [];
        foreach($sets as $form) {
            $condition = [
                ['=', 'id', $form]
            ];
            
            $model = Content::find()->where($condition)->one();
            $forms[] = $model->body;
        }
        
        return $forms;
    }
    
    private function getSets($set) 
    {
        $condition = [
            ['=', 'id', $set]
        ];
        
        $model = Content::find()->where($condition)->one();
        return json_decode($model->body);
    }
    
    private function gotoHome() 
    {
        header("Location: index.php?r=document");
        exit();
    }
    
}