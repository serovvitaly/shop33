<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Front {

    protected $_route = NULL;
    
    public function action_main()
    {
        $this->_route = $this->request->param('route');
        
        $this->content = 'hello, world! - ' . $this->_route;
        
    }

} // End
