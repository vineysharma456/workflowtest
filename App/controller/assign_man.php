<?php


class assign_man extends Controller{
    public function index(){
      
    if(isset($_POST['logout'])){
      session_unset();
      header("location: home");
    }
    $product = new assign_man();
  
    
   
  $this->view('assign_man.view');
    }
}
