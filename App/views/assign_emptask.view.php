  

<?php
    $model= new user();
     $res =  $model->where(['id'=>$_GET['id']]);
    //  print_r($res);
     ?>
<!DOCTYPE html>
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
       
            <span class="text-green-400 text-sm">manager@gmail.com</span>
            
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
                            <span> Managers</span>
                        </a>
                    </li>
                    <li>
                        <a href=""class="flex items-center gap-4 hover:bg-white hover:text-black hover:rounded-md p-2">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill="none" stroke="currentColor" stroke-width="2" d="M16,12 C18.3736719,13.1826446 20,15.6506255 20,19 L20,23 L4,23 L4,19 C4,15.6457258 5.6310898,13.1754259 8,12 M12,13 C15.3137085,13 18,10.3137085 18,7 C18,3.6862915 15.3137085,1 12,1 C8.6862915,1 6,3.6862915 6,7 C6,10.3137085 8.6862915,13 12,13 Z M18,7 C16.5,7 15,7.3599999 13,5 C11,7.3599999 8.5,8 6,7 M7,13 L12.0249378,18.2571942 L17,13 M12,18 L12,23"></path></svg>
                            <span> Employees</span>
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
        <h2 class ="py-4 ml-12 text-xl text-slate-600 font-bold"> ASSIGN TASK</h2>
         
      
            <form action="" method="post" class="flex gap-4 p-4">
            <input type="hidden" name="emp_id" class="p-2 inline " value="<?php echo $res[0]['id'] ?>" >
        <div class="flex flex-col gap-2">
            <label for="emp_name">Name</label>
            <input type="text" name="emp_name" class="p-2 inline " value="<?php echo $res[0]['Name'] ?>" >
        </div>
        <div class="flex flex-col gap-2 mt-12">
        <select name="task_no" id="" >
        
        <option >Select Task_NO</option>
       <?php 
       $task2 = new work();
       $options2 = $task2->first('task_no');
      
     
       
       foreach ($options2 as $option) {
       ?>
         <option><?php echo $option['task_no'] ;
             
         
         ?> </option>
         <?php 
         }
        ?>
     </select>
        </div>
    <div class="flex flex-col gap-2 mt-12">
        <select name="emp_task" id="" >
        
        <option >Select TASK_TITLE</option>
       <?php 
       $task2 = new work();
       $options2 = $task2->first('Title');
      
     
       
       foreach ($options2 as $option) {
       ?>
         <option><?php echo $option['Title'] ;
             
         
         ?> </option>
         <?php 
         }
        ?>
     </select>
        </div>
        <div class="flex flex-col gap-2">
        <label for="emp_message">Message</label>
            <input type="text" name="emp_mesage" class="p-2 inline "  value="<?php echo $res[0]['Email'] ?>">
        </div>
        
        <!-- <input type="hidden" name="Role"  value ="manager" class="p-2 inline " > -->
        <button class="bg-white py-1 px-2" name="submit">SUBMIT</button>
       </form>
            </div>
        </form>
    </section>
    </main>
    
<?php    
 $_GET['id'];
 $new2 = new emp_db();
$id = $new2->first('emp_id');
$task_no = $new2->first('task_no');

$idcount = count($id);
$taskcount = count($task_no);

    if (isset($_POST['submit'])) {
        $new2 = new emp_db();
        
        // $taskCount = $new2->where(['task_no' => $_GET['task_no']]);
        // $idCount = $new2->where(['emp_id' => $_POST['emp_id']]);

        if ($idcount > 0 && $taskcount > 0) {
            // echo "TASK IS ALREADY ASSIGNED TO THE EMPLOYEE OR MAY BE THE EMPLOYER IS BUSY";
            echo '<script>alert("TASK IS ALREADY ASSIGNED TO THE EMPLOYEE OR MAY BE THE EMPLOYER IS BUSY")</script>';
        } else {
            $new2->insert($_POST, $_GET['id']);
        }
    }



      
    

    
    
    ?>
</body>
</html>