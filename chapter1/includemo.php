
<?php 
  header('Location: http://example.com')
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include demo</title>
</head>
<body>
    <?php
      include './exp1.php';
      require './heading.html';
      include_once './exp1.php';      
 ?>
</body>
</html>