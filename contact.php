<!DOCTYPE html>
<html lang="en">
    <head>
        <title>myhealthy food website</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
<?php

    $email=$_POST['email'];
    $name=$_POST["name"];
    $subj=$_POST["subject"];
    $message=$_POST["text"];
    $conn=mysqli_connect('localhost','root','');
    if (!$conn){
	die("connection failed" . mysqli_connect_error());
    }
    $db=mysqli_select_db($conn,'mysite');
    if(!$db){
        echo "wrong database";
    }
    $query="insert into contactform(name,email,subject,message) values('" . $name . "','" . $email . "','" . $subj . "','" . $message . "')";
    if(mysqli_query($conn,$query)){
         echo "New record created successfully";
     } 
    else {
             echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
    </body>
    </html>