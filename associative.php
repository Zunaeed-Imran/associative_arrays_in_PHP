<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="associative.php" method="post"> <!-- The problem was form action path -->
    <label>Enter a comis character Name</label><br>
    <input type="text" name="name"><br>
    <input type="submit">
  </form>
</body>
</html>
<!--  html input code end -->

<?php
// PHP code Start

$marvel = array("dormamu" => "Most-powerful-being",
                "strange" => "Master of misticles",
                "stark" => "Smart of all time",
                );

                $marvel = $marvel[$_REQUEST['name']];

                echo "title of this hero is {$marvel}";
?>
