<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Main {

    public function action_login()
    {
        $login = Arr::get($_POST, 'login');
        $pass  = Arr::get($_POST, 'pass');
        
        $message = NULL;
        
        if ($login AND $pass) {
            if (Auth::instance()->login($login, $pass)) {
                $this->request->redirect('/');
            }
            else {
                $message = 'Не удалось авторизоваться';
            }
        }
        
        $view = View::factory('layouts/default', array(
            'content' => View::factory('common/login', array('message'=>$message))
        ));
        
        $this->response->body($view);
    }

    public function action_logout()
    {
        $redirect_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/';
        
        if ($this->_user->has('roles', $this::ROLE_TEMP)) {
            $this->request->redirect($redirect_url);
            return;
        }
        
        Auth::instance()->logout();
        
        $this->request->redirect($redirect_url);
    }

} // End
