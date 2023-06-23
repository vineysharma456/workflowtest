<?php
class employee extends Controller{
    public function index(){
       
        if(isset($_POST['logout'])){
          session_unset();
          header("location: home");
        }
   
    $product = new employee();
   
    if(isset($_POST['submit'])){
        unset($_POST['submit']);
        $new2 = new user();
        $new2->insert($_POST);
     
      
      }
      if(isset($_POST['logout'])){
        session_unset();
        header("location: home");
      }
        
      

    
   
  $this->view('employee.view');
    }
}