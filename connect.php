<?php
    $conn = mysqli_connect("localhost:3308","root","","shopit");
    if($conn==false){
        die('db erorr:'.mysqli_connect_error());
    }
?>