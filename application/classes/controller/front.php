<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Front extends Controller {

    protected $_route = NULL;
    
	public function action_main()
	{
        $this->_route = $this->request->param('route');
        
		$this->response->body('hello, world! - ' . $this->_route);
	}

} // End
