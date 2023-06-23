<!-- this is for vieew folder of controller -->
<?php
class Controller{
    public function view($name){
        $filename = "../App/views/".$name.".php";
      
        if(file_exists($filename)){
            require $filename;
        }
       
        else{
            $filename ="../App/views/404.php";
            require $filename;
        }
    }
}