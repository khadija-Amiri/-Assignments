

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

    form{
        background-image: url("3.jpg");
        padding-right:20px;
        padding-left:20px;

border: 4px solid #000;
width: 500px;
height: 600px;
position: relative;
margin-left: auto;
margin-right: auto;
    }

    input[type=text], input[type=Email] , input[type=password] , input[type=Date]{
            width: 200px;
            padding: 15px 20px;
            padding-right: 40px;
            padding-left:40px;
            margin: 10px 3px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;

            
        }
        button{
            color: #000;
            margin: 25px;
            padding:5px;
            background-color: green;
            width: 90%;
            cursor: pointer;

        }
</style>
<body>
    

<form action="register_backend.php" method="get">
<label for="name"> <b> Name </b></label>
    <input type="text" name= "your_Name"  placeholder= " Enter your name" >

    <br>
    <br>

    <label for="Last_name"><b>Last_name</b></label>
    <input type="text" name="last_name" placeholder=" Your last name">

    <br>
    <br>

    <label for="age"><b>your_Birthday</b></label>
    <input type="date" name="your_age" placeholder="Enter your age">


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

    
    <label for="image"> <b> select image file! </b></label>

    <input type="file" name="filename" id="files">
   

    <br>
    <br>

    <button type="submit"> <b> submit </b></button>

    




  




</form>
</body>
</html>