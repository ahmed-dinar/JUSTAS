<?php

/*
* 
*/

class login extends Controller{
	
	function __construct() {
        parent::__construct(); 
    }

    //the base index function of error controller
    public function index(){
    	$this->view->render("login/index");
    }


    //run the login process
    public function run(){

        //check if the run request from submition form
        if( Input::exists('post') ){

            //check if form loaded propely
            if( Token::check(Input::get('token')) ){
                if( $this->model->process() ){
                    header("Location: ".SITE_URL);
                }
                else{
                    Session::flush('error-login','Username or password is incorrrect!');
                    header("Location: ".SITE_URL."/login");
                }
            }
            else{
                Session::flush('sure','404: Page does not exists!<br/>Are you sure what you are looking for?');
                require_once SITE_PATH.'/app/controllers/error_controller.php';
                $control = new error();
                $control->index();
                return FALSE;
            }
        }
        else{
            Session::flush('sure','404: Page does not exists!<br/>Are you sure what you are looking for?');
            require_once SITE_PATH.'/app/controllers/error_controller.php';
            $control = new error();
            $control->index();
            return FALSE;
        }

    }


    public function logout(){
        $this->model->logout();
    }
    
	
}