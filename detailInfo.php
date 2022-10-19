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
    $sql = "INSERT INTO `detailinfo` (`id`, `Business Name`, `Category`, `Email`, `Business Owner`, `Summary`, `Description`, `Revenue`, `Gross profit`, `Net profit`, `funds required`) VALUES ('?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?')";

    if($stmt = mysqli_prepare($conn, $sql)){
        mysqli_stmt_bind_param($stmt, "sssssssssss", $id, $bName,$category,$Email,$bOwner, $summary, $discrip, $revenue,$gross,$net,$netfundreq);
     }

    $id = 1;
    $bName = "Menstrupedia";
    $category = "Education";
    $Email = "menstrupedia1@gmail.com";
    $bOwner = "Aditi Gupta";
    $summary = "Menstrupedia is a complete guide about periods that is taught in more than 30 schools across India. They also have several free resources available to help break the taboo.";
    $discrip = "Aditi Gupta is one of the Indian women entrepreneurs who is an author and the co-founder of the comic Menstrupedia. Tired of the myths and misinformation that surrounded Menstruation she took it upon herself to make a change. She and her husband co-founded the comic in 2012. In 2014 she was listed on the Forbes India 30 under 30 list for her work towards breaking the taboo. Today, Menstrupedia has been used in more than 6,000 schools and has benefited more than 10,00,000 girls in over 14 languages.";
    $revenue = "10000000";
    $gross = "3000000";
    $net = "1200000";
    $netfundreq = "5000000";

    mysqli_stmt_execute($stmt);

?>