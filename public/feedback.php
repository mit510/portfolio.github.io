<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="portfolio";

    $conn= new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
    {
        die("connection fail");
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql="INSERT INTO `feedback` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";

if($conn->query($sql)==true)
{
   echo "Submited";
}
else
{
   echo "Error";
}
   
 $conn->close();


 ?>