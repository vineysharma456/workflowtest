<?php
class client_table extends Controller{
    public function index(){
       
        
        if(isset($_POST['logout'])){
          session_unset();
          header("location: home");
        }

    $product = new client_table();
   
    
   
  $this->view('client_table.view');
    }
}