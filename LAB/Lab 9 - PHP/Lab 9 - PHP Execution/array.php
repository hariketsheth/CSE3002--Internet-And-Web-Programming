<?php 
    if(isset($_POST['submit'])){
        $num = $_POST['num'];
        $pass = $_POST['pass'];

        $arr = [];
        $iteams = explode(',', $_POST['data']);
        if((count($items)>$num) && count($items)>0){
            echo $items;
        ?>
            <h3>Invalid number of entries. Please check again</h3>
        <?php
        }
        else{
        ?>
            <h3>Valid Number of Entries. Processing ahead.....</h3>
        <?php
        }
        foreach ($item as $items)
            echo $item+"\n";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 9 - PHP Arrays</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST" id="final" name="final">
        <input type="text" id="num" name="num" placeholder="Enter the number of Inputs"><br>
        <input type="text" id="username" name="username" placeholder="Enter Username"><br>
        <input type="text" name="pass" id="pass" placeholder="Enter Password"><br>
        <input type="text" name="data" id="data" placeholder="Enter the data"><br>
        <input type="submit" name="submit" id="submit" value="Submit Form">
    </form>
</body>
</html>