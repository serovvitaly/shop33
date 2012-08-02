<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Index extends Controller_Admin_Template {
    
    public $title = 'Adminnka';

    public function action_index()
    {
        $this->content = 'index';
    }
    
    public function action_goo()
    {
        $this->content = 'GOGO';
    }
    

} // End Welcome
