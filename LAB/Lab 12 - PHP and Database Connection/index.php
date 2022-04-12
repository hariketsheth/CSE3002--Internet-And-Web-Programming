<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 10 - PHP and Database</title>
</head>
<body>
    <h1> Online Reservation System </h1>
    <p> This system would be used to book train tickets according to their availability to passengers. </p>
    
    <br>
    <br>
    <h3> Railway Officer View </h3>
    <form action="" method="POST">
        <label for="rail_name" >Train Name: </label>
        <input type="text" name="rail_name" id="rail_name" placeholder="Enter the Train Name">
        <label for="rail_num">Train Number: </label>
        <input type="number" name="rail_num" id="rail_num" placeholder="Enter the Train Number">
        <label for="rail_for">Train Arrival: </label>
        <input type="text" name="rail_for" id="rail_for" placeholder="Enter the Train Arrival">
        <label for="rail_to">Train Destination: </label>
        <input type="text" name="rail_to" id="rail_to" placeholder="Enter the Train Destination">
        <label for="rail_available">Number of Available Seats: </label>
        <input type="number" name="rail_available" id="rail_available" placeholder="Enter Number of Available seats">
        <input type="submit" value="Update Train Information">

</form>
</body>
</html>