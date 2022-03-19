<?php
    if(isset($_POST['final'])){
        $age = $_POST['age'];
        if($age<13){
            ?>
            <h1 style="color: red; font-family: Arial; font-weight: bolder;">Account Creation Failed, the User age is below 13 years </h1>
        <?php
        }
        else{
            ?>
            <h1 style="color: green; font-family: Arial; font-weight: bolder;">Account Creation Successful </h1>
            <?php
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lab 9 - PHP COnditionals</title>
</head>
<body>
    <form action="" method="POST" id="php-conditional" name="php-conditional">
        <input type="text" name ="name" id="name" placeholder="Enter Full Name"><br>
        <input type="email" name ="email" id="email" placeholder="Enter User email"><br>
        <input type="text" name="age" id="age" placeholder="Enter age of the user"><br>
        <input type="submit" name="final" id="final" value="Create Account "><br>
    </form>
    
</body>
</html>