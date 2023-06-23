<?php
class managers_admin_emp extends Controller{
    public function index(){
       
    if(isset($_POST['logout'])){
      session_unset();
      header("location: home");
    }
  
    $product = new managers_admin_emp();
    
  
    
   
  $this->view('managers_admin_emp.view');
    }
}