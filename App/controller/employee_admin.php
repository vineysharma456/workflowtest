<?php
class employee_admin extends Controller{
    public function index(){
        // echo "this is the product controller";
        // $obj = new home();
    // $obj->insert();
    // $this->view('home.view');
    if(isset($_POST['logout'])){
      session_unset();
      header("location: home");
    }
    $product = new employee_admin();
    // $model= new user();
    // $gain =  $model->where(['Role'=>'manager']);
    // print_r($res);
    // $new2 = new user();
    // if(isset($_POST['submit'])){
    //   unset($_POST['submit']);
    //   $new2 = new user();
    //   $new2->insert($_POST);
    //   // print_r($_POST);
    
    // }
      
    // }
    
   
  $this->view('employee_admin.view');
    }
}