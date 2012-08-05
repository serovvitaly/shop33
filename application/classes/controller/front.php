<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Front extends Controller_Template {
    
    public $template = 'default';
    
    
    public $title      = NULL;
    public $topmenu    = NULL;
    public $content    = NULL;
    public $floatside  = NULL;
    
    
    public function before()
    {
        $this->template = 'admin/layouts/' . $this->template;
        
        parent::before();
    }
    
    public function after()
    {
        $this->template->title     = $this->title;
        $this->template->topmenu   = View::factory('common/topmenu');
        $this->template->content   = $this->content;
        $this->template->floatside = View::factory('admin/common/floatside');
        
        parent::after();
    }

} // End

