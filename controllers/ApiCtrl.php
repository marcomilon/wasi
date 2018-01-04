<?php 

namespace app\controller;

use micro\Controller;
use app\model\Content;

class ApiCtrl extends Controller 
{
    public function index($key) {
        $condition = [
            ['=', 'uniqid', $key],
            ['and'],
            ['=', 'type', 'document']
        ];
        
        $model = Content::find()->where($condition)->one();
        $body = json_decode($model->body, true);
        unset($body['metadata']);
        
        header('Content-Type: application/json');
        echo json_encode($body);
    }
}