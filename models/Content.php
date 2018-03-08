<?php 

namespace app\model;

use micro\Model;

class Content  extends Model
{
    
    public static function tableName() 
    {
        return 'content';
    }
    
    public static function dbConnection() 
    {
        $config = self::getConfig();
        $db = $config['db'];
        
        return new \micro\db\Connection($db['servername'], $db['username'], $db['password'], $db['database']);
    }
    
}