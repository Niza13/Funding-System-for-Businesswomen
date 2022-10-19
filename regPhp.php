<!-- reg form php -->

<?php

    // connection link
    $conn = mysqli_connect("localhost","root","", "WIE");
   
    //checking the connection
    if(!$conn){
        die("Error: couldn't connect ". mysqli_connect_error());
    }
    else{
        echo"Database Connected Successfully";
       
    }


    // query with prepared statement
    $sql = "INSERT INTO `reginfo` (`id`, `Name`, `Email`, `State`, `City`, `Password`) VALUES (?, ?, ?, ?, ?, ?)";
     if($stmt = mysqli_prepare($conn, $sql)){
        mysqli_stmt_bind_param($stmt, "ssssss", $id, $Name, $Email, $State, $City, $Password);
     }

    $id = 2;
    $Name = "Pruthvi";
    $Email = "abc@gmail.com";
    $State = "Gujarat";
    $City = "Ahmedabad";
    $Password = "123#4ud@dyn";
    mysqli_stmt_execute($stmt);

?>