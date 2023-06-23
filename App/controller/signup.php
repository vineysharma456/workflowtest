<?php
class signup extends Controller{
    public function index(){
     
    $product = new signup();
    if(isset($_POST['submit'])){
      unset($_POST['submit']);
      unset($_POST['cpassword']);
      $new2 = new user();
      $new2->insert($_POST);
   
    
    }
      

    
  $this->view('signup.view');
    }
}
