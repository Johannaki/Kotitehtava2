
<!DOCTYPE HTML>
<html lang="en">
   <head>
     <meta charset="UTF-8">
     <title></title>
     <style>
     body {background-color: #fff3ef; padding: 40px;}
     h2   {color: #5e5940;}
     p    {color: #17183b;}
     input {color: #17183b;}
     </style>
   </head>
   <body>
     <h2>Tehtävä 2</h2>
     <form action="kotitehtava2.php" method="post">
       <p>Montako tähteä haluat nähdä viimeisellä rivillä?:</p>
       <input type="number" name="numeroni" value="" min="1" autofocus><br>
       <input type="submit" value="Näytä"><br><br>
     </form>
<?php
$numero=$_POST['numeroni'];

$a = 1;
$tahti = '*';

while ($a <= $numero) {
  echo str_repeat($tahti, $a). "<br>";
  $a++;
}
?>

</body>
</html>
