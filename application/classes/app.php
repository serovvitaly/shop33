<?php defined('SYSPATH') or die('No direct script access.');

class APP {

    public function __construct()
    {        
        //
    }
    
    public static function user($param = NULL)
    {
        $_user_instance = Auth::instance()->get_user();
        
        if ($param AND isset($_user_instance->$param)) {
            return $_user_instance->$param;
        }
        
        return $_user_instance;
    }

} // End
