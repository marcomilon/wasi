<?php 

namespace app\controller;

use micro\Controller;

class SchemaCtrl extends Controller 
{
    
    public function index() 
    {
        return $this->render('index');
    }
    
    public function create() 
    {
        return $this->render('create');
    }
    
}