<?php

class user extends Controller{

	function __construct() {
        parent::__construct(); 
    }

    public function index(){
    	require_once SITE_PATH.'/app/controllers/error_controller.php';
	    $control = new error();
	    $control->index();
	    return FALSE;
    }

    public function check(){

        if ( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ){ 

              $id = $_POST['userid'];

              $ret  = array();

              $ret['error'] = false;
              $ret['msg'] = $id. ' is avaivvlr';

              echo json_encode($ret);
        }
        else{
            require_once SITE_PATH.'/app/controllers/error_controller.php';
            $control = new error();
            $control->index();
            return FALSE;
        }
    }

}