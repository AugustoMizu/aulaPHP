<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<html>
 <head>
  <title>Curso PHP Progressivo</title>
 </head>
 <body>
 <form action="aula_27_08.php" method="get">
  Um número : <input type="text" name="number1"><br>
  Um número de novo : <input type="text" name="number2"><br>
  <input type="submit">
 </form>
 
 <?php 
 $num1 = $_GET["number1"];
 $num2 = $_GET["number2"];

 if(is_numeric($num1) && is_numeric($num2)){
    $num1 += $num2;
 }
 else{
   $num1 =  $num1 . $num2;
} 
wait
if(){
        echo "A soma é: $num1 <br>";
      }
      else{
          echo "Isso é uma frase : $num1 ";
      }
 ?>
 </body>
</html>