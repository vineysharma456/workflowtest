<?php
class task extends Controller{
    public function index(){
      
    if(isset($_POST['logout'])){
      session_unset();
      header("location: home");
    }
    
   
  $this->view('task.view');
    }
}