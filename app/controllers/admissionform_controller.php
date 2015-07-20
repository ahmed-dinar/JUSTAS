<?php

class admissionform extends Controller{

	function __construct() {
        parent::__construct(); 
    }

	public function index(){
		$this->view->render("admissionform/index");
	}	

	public function run(){
		if( Input::exists('post') ){

            //check if form loaded propely
            if( Token::check(Input::get('token')) ){
               // echo $this->model->process();


            	

            	
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

}