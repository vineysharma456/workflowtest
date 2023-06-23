<?php
class home extends Controller{
    public function index(){
       
 if(isset($_POST['submit'])){
    unset($_POST['submit']);
    $model= new user();
    $res =  $model->where(['Email'=>$_POST['email']]);
    if($res){
        $role = $res[0]['Role'];
        session_start();
            $_SESSION['email'] =$_POST['email'];
            $_SESSION['password'] =$_POST['password'];
            $_SESSION['id'] =$res[0]['id'];
            $_SESSION['name'] =$res[0]['Name'];
            if($_POST['email']==($res[0]['Email'])){
                if($role=='admin'){
                    header('location: admin');
        
                }
                elseif($role=='client'){
                    header('location: client');
        
                }
               elseif($role=='employee'){
                header('location: employee_admin');
        
               }
               elseif($role=='manager'){
                header('location: managers_admin');
        
               }
                
                
            }
           
           
        
            
        
         }
         else{
            echo '<script>alert("User does  not exist")</script>';
                
        }
    }
    

   

    $this->view('home.view');

  
 
  
  
    }
   
}
