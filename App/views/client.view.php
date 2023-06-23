<?php
session_start();
$_SESSION['id'];
$_SESSION['name'];
$res =  $_SESSION['id'];
$res_name = $_SESSION['name'];



?>
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
    <aside class="w-60 h-full bg-[#52882e] p-4">
        <div>
            <span class=" text-gray-200 text-lg font-semibold"> Welcome Customer</span>
            
        </div>
        <div>
            <form action="" method="post">
            <button class="bg-red-700 text-white p-4 font-semibold fixed bottom-2 left-6 rounded-2xl" name="logout">LOGOUT</button>
     
            </form>
               </div>
               <!-- <div class="fixed bottom-2 left-8  rounded-full p-4 bg-blue-600">
            <form action="" method="post">
            <button name ="logout"> LOGOUT</button>
            </form>
           -->
        </div>

    </aside>
    <main class=" h-full w-full">
     <form action="" method="post" class="p-4 space-y-4">
     <input type="hidden" name="name" value=<?php echo $res_name; ?> >
     <input type="hidden" name="id" value=<?php echo $res; ?> >
       <div class="space-x-2">
        <label for="title" class="text-white bg-orange-600 p-2 rounded-md">Title </label>
        <input type="text" name="title" class="border-2 border-orange-300 p-2 rounded-lg">
       
    </div>
    <div class="space-x-2">
        <label for="note" class="text-white bg-orange-600 p-2 rounded-md">Note </label>
        <input type="text" name="note" class="border-2 border-orange-300 p-2 rounded-lg">
       
    </div>
    <div class="space-x-2">
        <label for="attchement" class="text-white bg-orange-600 p-2 rounded-md">Attachment </label>
        <input type="text" name="attachment" class="border-2 border-orange-300 p-2 rounded-lg">
        
       
    </div>
    <button class="bg-green-500 font-semibold text-white p-3 rounded-2xl" name ="submit">
      ADD TASK
    </button>
     </form>
    </main>
  
</body>
</html>