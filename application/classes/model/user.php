<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends ORM {
    
    const ROLE_ADVERT = 'advertiser';
    
    const ROLE_SELLER = 'seller';
    
    protected $_roles = NULL;
    
    protected $_has_many = array(
        'roles' => array(
            'through' => 'roles_users',
            'model'   => 'role',
            //'foreign_key' => 'role_id'
        ),
        'cart' => array(
            'model'   => 'cart',
            'foreign_key' => 'user_id'
        ),
    );
    
    public function unique_key($username)
    {
        return 'email';
    }
    
    public function complete_login()
    {
        //
    }
    

    public function get_prods()
    {
        return $this->cart->group_by('item_id')->count_all();
    }

    public function get_summa()
    {
        return 8825;
    }
    


    
    
} // End
