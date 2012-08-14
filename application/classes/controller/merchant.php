<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Merchant extends Controller_Template {

    const SAVER_GET  = 0;
    
    const SAVER_POST = 1;
    
    
    public $template = 'merchant/index';
    
    protected $_USER = NULL;
    
    protected $_saver_method = self::SAVER_POST;
    
    protected static $_saver_token  = '3463256weedsgdhvyt565462d3';
    
    
    
    public static function get_token()
    {
        return md5(self::$_saver_token);
    }
    
    public function before()
    {
        $this->_USER = Auth::instance()->get_user();
        
        if ($this->_USER->type != 'merchant') {
            throw new Exception('Access denied', 500);
        }
        
        parent::before();
        
        $this->template->topmenu   = View::factory('merchant/topmenu');
        $this->template->floatside = View::factory('merchant/floatside');
        $this->template->content   = 'content';
    }
    
    
    public function action_index()
    {        
        
    }
    
    protected function saver($model)
    {
        
        switch ($this->_saver_method) {
            case self::SAVER_GET :
                $global_var = $_GET;
                break;
                
            case self::SAVER_POST :
                $global_var = $_POST;
                break;
                
            default :
                $global_var = $_GET;
        }
        
        if (isset($global_var[$model]) AND is_array($global_var[$model]) AND count($global_var[$model]) > 0) {
            
            if (!isset($global_var['token']) OR $global_var['token'] != self::get_token()) {
                return false;
            }
            
            $data = $global_var[$model];
            
            $model_instance = ORM::factory($model);
        
            $model_columns  = $model_instance->list_columns();
            
            foreach ($data AS $field_name => $field_item) {
                
                if (in_array($field_name, array_keys($model_columns))) {
                    
                    $model_instance->set($field_name, $field_item);
                    
                }                
            }
            
            $model_instance->set('user_id', $this->_USER->id);
            
            $model_instance->save();
        }
        
        return false;
    }

} // End
