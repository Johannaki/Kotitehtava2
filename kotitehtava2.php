<!DOCTYPE HTML>
<html lang="en">
   <head>
     <meta charset="UTF-8">
     <title></title>
       
    <script>
        var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}   
    </script>
       
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
       
<button class="accordion">Section 1</button>
<div class="panel">
  <p>Lorem ipsum...</p>
</div>

<button class="accordion">Section 2</button>
<div class="panel">
  <p>Lorem ipsum...</p>
</div>

<button class="accordion">Section 3</button>
<div class="panel">
  <p>Lorem ipsum...</p>
</div>

</body>
</html>
