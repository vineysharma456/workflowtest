<?php
class client extends Controller{
    public function index(){
        $this->view('client.view');
      
    
   

   if(isset($_POST['logout'])){
    session_unset();
    header("location: home");
   }
   if(isset($_POST['submit'])){
    unset($_POST['submit']);

    $product = new work();
    $product->insert($_POST);

    }
   
    }
}
