<!DOCTYPE html>

<html>
 <head>
 <title>calculator</title>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
 </head>
 <body>
 
 <div class="container" style="margin-top: 50px">
 
 <?php
 
 
 if(isset($_POST['submit']))
 {
 if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
 {
 
 if($_POST['operation'] == 'Plus')
 {
 $total = $_POST['number1'] + $_POST['number2']; 
 }
 if($_POST['operation'] == 'Minus')
 {
 $total = $_POST['number1'] - $_POST['number2']; 
 }
 if($_POST['operation'] == 'Multiply')
 {
 $total = $_POST['number1'] * $_POST['number2']; 
 }
 if($_POST['operation'] == 'Divide')
 {
 $total = $_POST['number1'] / $_POST['number2']; 
 }
 
 
 echo "<h1>{$_POST['number1']}</h1>"; 
  echo " <h2>{$_POST['operation']} </h2>";
  echo "<h3> {$_POST['number2']} equals {$total} </h3>";
 
 } else {
 echo 'Numeric values are required';
 
 }
 }
 
 ?>
     
     
     <form method="post" action="calculator.php">
         <input name="number1" type="text" class="form-control" style="width: 200px; display: inline" />
         <select name="operation">
          <option value="Plus">Plus</option>
             <option value="Minus">Minus</option>
             <option value="Multiply">Multiply</option>
             <option value="divide">Devide</option>
         </select>
         <input name="number2" type="text" class="form-control" style="width: 200px; display: inline" />
         <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
     </form>
     
 </div>
 
 </body>
</html>