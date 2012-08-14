<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Merchant_Profile extends Controller_Merchant {

    public function action_index()
    {        
        $this->template->content = View::factory('merchant/profile/index');
    }

} // End
