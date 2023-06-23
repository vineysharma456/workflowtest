<?php
class mana_table extends Controller{
    public function index(){
       
        if(isset($_POST['logout'])){
          session_unset();
          header("location: home");
        }
    
    $product = new mana_table();
   
  
    
   
  $this->view('mana_table.view');
    }
}