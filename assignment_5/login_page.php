<?php

session_start();


if (isset($_SESSION['authenticated'])) {
    header('location: backend.php');
    # code...
}

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session5</title>

    <style>

        body{
            background-color: #000
        }

        
        form{
            background-image: url("1.jpg");

            border: 3px solid #000;
            width: 300px;
            height: 300px;
            position: relative;
            margin-left: auto;
            margin-right: auto;
            
            
        }
        input[type=text], input[type=Email] , input[type=password]{
            width: 200px;
            padding: 15px 20px;
            margin: 10px 3px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button{
            color: #000;
            margin: 4px;
            padding: 3px;
            background-color: green;
            width: 45%;
            cursor: pointer;

        }
        
    </style>
</head>
<body>


   <form action="backend.php" >
    <label for="name"> <b> Name </b></label>
    <input type="text" name= "your_Name"  placeholder= " Enter your name" >

    <br>
    <br>

    <label for="Emali"> <b> Emali </b> </label>
    <input type="email" name=" Your_Email" placeholder=" Enter your Email" >

    <br>
    <br>

    <label for="Password"> <b>Password </b></label>
    <input type="password" name="psw" placeholder=" password">


  

    <br>
    <br>
    <button type= 'submit'  id= 'btn_1'><b>Login</b></button>
    <button formaction="register.php" id='btn_2'> <b>Register </b></button>

    


  

   

   
   
   </form> 

</body>
</html>

