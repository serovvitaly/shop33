<?php defined('SYSPATH') or die('No direct script access.');

class Saver_Main {

    protected static $_model = NULL;
    
    protected static function _prepare_model($model)
    {
        self::$_model = Model::factory($model);
        
        return self::$_model;
    }
    
    public static function factory($model)
    {
        self::_prepare_model($model);
        
        return self::render();
    }
    
    public static function render()
    {
        //
    }

} // End
