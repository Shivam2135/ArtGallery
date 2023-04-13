<?php
$con=mysqli_connect('localhost','root');

if($con){
    echo"Connection successfull";
}
else{
    echo"Connection failed.";
}

mysqli_select_db($con,"webapp");

$user = $_POST['user'];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$comment = $_POST["comment"];

$query = "INSERT INTO userinfodata ( Name, Email, Mobile, Comment) 
VALUES ('$user','$email','$mobile','$comment')";

mysqli_query($con,$query);

header('location:index.php');

?>