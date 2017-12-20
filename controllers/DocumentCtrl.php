<?php 

namespace app\controller;

use micro\Controller;

class DocumentCtrl extends Controller 
{
    
    public function index() 
    {
        return $this->render('index');
    }
    
}