<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Front {

    protected $_route = NULL;
    
    public function action_index()
    {
        $this->_route = $this->request->param('route');
        
        $this->content = View::factory('merchant/header');;
        
    }

} // End
