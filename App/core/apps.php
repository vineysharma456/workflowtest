<!-- this page is for routing purpose -->

<?php
class apps{
    public $controller = 'home';
    public $method = 'index';
   public  function splitURL(){
        $URL = $_GET['url'] ?? 'home';
        $URL = explode("/",$URL);
        return $URL;
    
    }
  
    public function loadController(){
        $URL = $this->splitURL();
        $filename = "../App/controller/".$URL[0].".php";
        if(file_exists($filename)){
            require $filename;
            $this->controller = $URL[0];
        }
        else{
            echo "comtroler mot foung";
        }
       
        $controller = new $this->controller;
  
        call_user_func_array([$controller,$this->method],[]);
    }
 

}

    ?>
    <!-- this file is used for ht access function
    we have used url in ht accsess
    and the get function will print the url in the array -->

