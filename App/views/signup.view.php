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

<body class="bg-[#f8f8f8] p-12 ">
    <!-- <div>
        <h2> LOGIN HERE</h2>
    </div> -->
    <div class="flex w-1/2 gap-4 m-auto p-10 bg-white rounded-2xl shadow-2xl "> 
        <div>
            <img src="https://colorlib.com/etc/regform/colorlib-regform-7/images/signup-image.jpg" alt="">
            <div class="py-6 px-6 text-xl font-bold">
                <a href="home">Already a member?</a>
            </div>

        </div>

        <div>
            <form action="" method="post">
                <h3 class="text-3xl font-bold py-6">Sign up</h3>
                <div class="flex flex-col gap-4">
                    <input type="text" placeholder="Your Name" class="p-4" name="Name">
                    <input type="text" placeholder="Your SurName" class="p-4" name="Surname">
                    <input type="email" placeholder="Your Email" class="p-4" name="Email">
                    <input type="password" placeholder="Password" class="p-4"  name="Password">
                    <input type="password" placeholder="ConfirmPassword" class="p-4" name="cpassword">
                    <input type="hidden" name ="Role" value= "client">
                    <button type="submit" class="bg-[#6de47d] rounded-full text-white p-2 inline-block text-xl font-semibold" name="submit">SIGNUP</button>
                </div>
            </form>
        </div>


    </div>
</body>
<?php
// if(isset($_POST['submit'])){
//     print_r($_POST);
// }
?>
