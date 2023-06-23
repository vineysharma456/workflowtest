<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/assets/input.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex">
<aside class="w-60 h-full bg-slate-600 text-white p-6">
        <div class="w-20 m-auto text-2xl font-bold h-20">
           <span>Admin</span>
            <span class="text-green-400 text-sm">admin@gmail.com</span>
        </div> 
        <div>
            <nav>
                <ul class="space-y-4">
                    <li>
                        <a href="admin" class="flex items-center gap-4 bg-slate-200 text-black rounded-md p-2">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill="none" stroke="currentColor" stroke-width="2" d="M16,12 C18.3736719,13.1826446 20,15.6506255 20,19 L20,23 L4,23 L4,19 C4,15.6457258 5.6310898,13.1754259 8,12 M12,13 C15.3137085,13 18,10.3137085 18,7 C18,3.6862915 15.3137085,1 12,1 C8.6862915,1 6,3.6862915 6,7 C6,10.3137085 8.6862915,13 12,13 Z M18,7 C16.5,7 15,7.3599999 13,5 C11,7.3599999 8.5,8 6,7 M7,13 L12.0249378,18.2571942 L17,13 M12,18 L12,23"></path></svg>
                            <span> Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="managers" class="flex items-center gap-4 hover:bg-white hover:text-black hover:rounded-md p-2">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill="none" stroke="currentColor" stroke-width="2" d="M16,12 C18.3736719,13.1826446 20,15.6506255 20,19 L20,23 L4,23 L4,19 C4,15.6457258 5.6310898,13.1754259 8,12 M12,13 C15.3137085,13 18,10.3137085 18,7 C18,3.6862915 15.3137085,1 12,1 C8.6862915,1 6,3.6862915 6,7 C6,10.3137085 8.6862915,13 12,13 Z M18,7 C16.5,7 15,7.3599999 13,5 C11,7.3599999 8.5,8 6,7 M7,13 L12.0249378,18.2571942 L17,13 M12,18 L12,23"></path></svg>
                            <span> ADD Managers</span>
                        </a>
                    </li>
                    <li>
                        <a href="employee"class="flex items-center gap-4 hover:bg-white hover:text-black hover:rounded-md p-2">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill="none" stroke="currentColor" stroke-width="2" d="M16,12 C18.3736719,13.1826446 20,15.6506255 20,19 L20,23 L4,23 L4,19 C4,15.6457258 5.6310898,13.1754259 8,12 M12,13 C15.3137085,13 18,10.3137085 18,7 C18,3.6862915 15.3137085,1 12,1 C8.6862915,1 6,3.6862915 6,7 C6,10.3137085 8.6862915,13 12,13 Z M18,7 C16.5,7 15,7.3599999 13,5 C11,7.3599999 8.5,8 6,7 M7,13 L12.0249378,18.2571942 L17,13 M12,18 L12,23"></path></svg>
                            <span> ADD Employees</span>
                        </a>
                    </li>
                   
                </ul>
            </nav>
        </div>
        <div class="fixed bottom-2 left-8  rounded-full p-4 bg-green-600">
            <form action="" method="post">
            <button name ="logout"> LOGOUT</button>
            </form>
          
        </div>
    </aside>
    <main class=" bg-slate-200 h-full w-full rounded-lg ">
        <header class = "text-white bg-slate-600 p-6 px-12 font-bold">WORK FLOW MANAGEMENT SYSTEM</header>
       <section class="">
        <h2 class ="py-4 ml-12 text-xl text-slate-600 font-bold"> Please Finally Confirm these tasks</h2>
    <div class="space-x-6 space-y-4  pl-12 py-20">
       <?php 
       $new = new manager_revert();
       $gain =  $new->where(['status'=>'Review']);
      
      ?>
      <table>
            <tr>
                <th class="p-2">
                task_id
                </th>
                <th class="p-2">
                    Status
                </th>
                <th class="p-2">
                    Update
                </th>
               

            </tr>
            <?php
            $model= new manager_revert();

            $gain =  $model->where(['status'=>'Review']);
             foreach($gain as $row){
                ?>
                

             
            <tbody>
                <tr>
                <td class="p-2" ><?php echo $row['task_id']?></td>
                <td class="p-2"><?php echo $row['status']?></td>
               
                <td class="p-2">
                <form method="post" action="">
    <input type="hidden" name="task_no" value="<?php echo $row['task_id']?>">
    
  <select name="status" id="">
    <option value="Pending">Pending</option>
    <option value="Done">Done</option>
  </select>
  <button name="submit">Submit</button>
</form>
<?php 

if(isset($_POST['submit'])){
    unset($_POST['submit']);
  
    $final = new work();
    
   
    $final->update2($_POST,$row['task_id']);

   



}
?>
         
</td>
              

              
               

             
                </tr>
            </tbody>
            <?php
             }
             ?>
        </table>

    </div>
    </section>
    </main>
    
</body>
</html>