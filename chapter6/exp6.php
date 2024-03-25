<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form handling</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="studentname" value="<?php
          if (isset($_POST['studentname']))
          echo 'you entered' .$_POST['studentname']. 'into the text field';
        ?>"><br><br>
        Favourite subject<br>
        <input type="checkbox" name="sub[]" value="EL"
        <?php
          if (isset($_POST['sub']) && in_array('EL', $_POST['sub']))
          echo 'checked';
        ?>
        >English <br>
        <input type="checkbox" name="sub[]" value="MA"
        <?php
          if (isset($_POST['sub']) && in_array('MA', $_POST['sub']))
          echo 'checked';
        ?>
        >Math <br>
        <input type="checkbox" name="sub[]" value="PG"
        <?php
          if (isset($_POST['sub']) && in_array('PG', $_POST['sub']))
          echo 'checked';
          ?>
          >Programming<br><br>
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

       $num = '12.5abc';
       ECHO '<BR>';
       echo filter_var($num, FILTER_SANITIZE_NUMBER_INT);

       $email = 'abcd@gmail.com';
       ECHO '<BR>';
       var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
    ?>   
    <script>alert('Hacked')</script>
</body>
</html>