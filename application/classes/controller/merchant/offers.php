<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Merchant_Offers extends Controller_Merchant {

    public function action_index()
    {        
        $this->template->content = View::factory('merchant/offers');
    }
    
    public function action_add()
    {
        $this->template->content = View::factory('merchant/offers') . '<br/> Новый проект';
    }

} // End
