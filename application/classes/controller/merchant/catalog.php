<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Merchant_Catalog extends Controller_Merchant {

    public function action_index()
    {        
        $this->template->content = View::factory('merchant/catalog/index');
    }
    
    public function action_good_add()
    {   
    
        $this->saver('good');
         
        $this->template->content = View::factory('merchant/catalog/good_add');
    }

} // End
