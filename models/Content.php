<?php 

namespace app\model;

use micro\db\ActiveRecord;

class Content extends ActiveRecord 
{
    
    public static function tableName() 
    {
        return 'content';
    }
    
    public static function dbConnection() 
    {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $database = "wasi";
        
        return new \micro\db\Connection($servername, $username, $password, $database);
    }
    
}