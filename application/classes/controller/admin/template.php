<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Admin_Template extends Controller_Template {
    
    public $template = 'default';
    
    
    public $title    = NULL;
    public $content  = NULL;
    
    
    public function before()
    {
        $this->template = 'admin/layouts/' . $this->template;
        
        parent::before();
    }
    
    public function after()
    {
        $this->template->title   = $this->title;
        $this->template->content = $this->content;
        
        parent::after();
    }

} // End
