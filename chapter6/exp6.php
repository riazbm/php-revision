<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form handling</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="studentname" value="your name" placeholder="Enter name"><br><br>
        Favourite subject<br>
        <input type="checkbox" name="sub[]" value="EL">English <br>
        <input type="checkbox" name="sub[]" value="MA">Math <br>
        <input type="checkbox" name="sub[]" value="PG">Programming<br><br>
        Gender<br>
        <input type="radio" name="gender" value="M">Male<br>
        <input type="radio" name="gender" value="M">Female<br><br>
        <input type="submit" name="sm" value="submit form">
    </form>

    <?php
       if (isset($_POST['sm']))
       print_r($_POST);
    
       $a = 5;
       $b = NULL;
       var_dump(isset($a));
       var_dump(isset($b));
       var_dump(isset($c));
    ?>   
</body>
</html>