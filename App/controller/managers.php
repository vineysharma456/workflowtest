<?php
class managers extends Controller{
    public function index(){
      
    $product = new managers();
 
    if(isset($_POST['submit'])){
      unset($_POST['submit']);
      $new2 = new user();
      $new2->insert($_POST);
    
    
    }
      
 
    if(isset($_POST['logout'])){
      session_unset();
      header("location: home");
    }
   
  $this->view('managers.view');
    }
}