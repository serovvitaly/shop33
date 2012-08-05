<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Main extends Controller {

    const ROLE_LOGIN = 1;
    
    const ROLE_TEMP  = 3;
    
    protected $_user = NULL;
    
    protected $_render_category;

    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);
        
        $this->_user = Auth::instance()->get_user();
        
    }

} // End
