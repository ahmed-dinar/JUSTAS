<?php


/**
* 
*/
class app{
	
    // constrauct method
	function __construct(){
		

		$url = $this->parseUrl();

        //set home as our default controller
		$file = SITE_PATH.'/app/controllers/home_controller.php';

        //if no  url type then load home
		if(empty($url[0])){
            require_once($file);
            $control = new home();
            $control->index();
            return FALSE;
        }

        //if controller not empty then check if it is a valid conroller
        $file = SITE_PATH.'/app/controllers/' . $url[0] . '_controller.php';

        //if valid then include it
        if(file_exists($file)){
            require_once $file;
        }
        else{
            Session::flush('sure','404: Page does not exists!<br/>Are you sure what you are looking for?');
            require_once SITE_PATH.'/app/controllers/error_controller.php';
            $control = new error();
            $control->index();
            return FALSE;
        }


        $name = $url[0];

        //create an object of that controller
        $control = new $name;

        //params array save the method and parameter of the controller class
        $params = [];

        //by default we set the methos as index
        $method = 'index';
        

        //if method is set in url
        if( isset($url[1]) ){
            
            //if it is index then skip it and show error
            if( $url[1] === 'index' ){
                Session::flush('sure','404: Page does not exists!<br/>Are you sure what you are looking for?');
                require_once 'app/controllers/error_controller.php';
                $control = new error();
                $control->index();
                return FALSE;
            }
            else if( method_exists($url[0], $url[1]) ){ //if method exists then set the method
                $method = $url[1];
                unset($url[0]);
                unset($url[1]);
                $params = $url ? array_values($url) : [];
            }
            else{
                Session::flush('sure','404: Page does not exists!<br/>Are you sure what you are looking for?');
                require_once 'app/controllers/error_controller.php';
                $control = new error();
                $control->index();
                return FALSE;
            }

        }

        //load the model required
        $control->loadModel($name);

        
        //finally call the method with paramters of that controller class
        call_user_func_array([$control,  $method], $params);


	}


    // return an array of url
	private function parseUrl(){
        if(isset($_GET['url'])){
            return $url = explode( '/', filter_var( rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL ) );
        }
    }

}


?>