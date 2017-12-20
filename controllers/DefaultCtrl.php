<?php 

namespace app\controller;

use micro\Controller;

class DefaultCtrl extends Controller 
{
    
    public function index() 
    {
        return $this->render('index');
    }
    
}
