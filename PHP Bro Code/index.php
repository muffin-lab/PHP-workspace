<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <label for="">x:</label>
    <input type="text" name="x" id=""><br>
    <input type="submit" value="Total">
  </form>
</body>

</html>

<?php

$x = $_POST["x"];
$total = null;

$total = floor($x);

echo "{$total}";

?>