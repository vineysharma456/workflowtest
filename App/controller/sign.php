<?php
class sign extends Controller{
    public function index(){
    
    $model= new user();
   

  $this->view('signup.view');
    }
}
