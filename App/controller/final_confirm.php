<?php
class final_confirm extends Controller{
    public function index(){
      
    session_start();
    if(!isset($_SESSION['email'])){
      header("location: home");
    }
    if(isset($_POST['logout'])){
      session_unset();
      header("location: home");
    }

    $product = new final_confirm();
  $this->view('final_confirm.view');
    }
}