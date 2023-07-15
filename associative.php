<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label>Enter a comis character Name</label><br>
    <input type="text" name="namecomis"><br>
    <input type="submit">
  </form>
</body>
</html>


<?php

$marvel = array("dormamu" => "Most-powerful-being",
                "strange" => "Master of misticles",
                "stark" => "Smart of all time",
                );

                $marvel = $marvel[$_POST['namecomis']];

                echo "title of this hero is {$marvel}";
?>
