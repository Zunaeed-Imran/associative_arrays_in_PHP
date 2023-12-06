<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice associative array</title>
</head>
<body>
  <form action="1_practice.php" method="post">
    <input type="text" name="hero">
    <button type="submit" name="submit">Submit</button>
  </form>
</body>
</html>

<?php

  $marvel = array("doctor" => "Doctor Strange Sorcerer supreme",
                   "stark" => "Tony Stark The genious Mechanic"               
                );

                $m = $marvel[$_POST['hero']];

                if(isset($_POST['submit'])){
                  echo $m;
                }
?>