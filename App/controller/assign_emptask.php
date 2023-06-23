<?php


class assign_emptask extends Controller{
    public function index(){
       
    if(isset($_POST['logout'])){
      session_unset();
      header("location: home");
    }
    $product = new assign_emptask();
   
    
   
  $this->view('assign_emptask.view');
    }
}
