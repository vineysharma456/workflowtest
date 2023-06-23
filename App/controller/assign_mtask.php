<?php


class assign_mtask extends Controller{
    public function index(){
        
  
    if(isset($_POST['logout'])){
      session_unset();
      header("location: home");
    }
    $product = new assign_mtask();
   
    $model= new manager();
 
   
  $this->view('assign_mtask.view');
    }
}