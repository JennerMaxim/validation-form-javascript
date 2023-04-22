<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "application";

$conn = mysqli_connect($server, $username, $password, $dbname);
if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $query = "insert into application(name, phone, email) values('$name', '$phone', '$email')";
        $run = mysqli_query($conn, $query) or die(mysqli_error());

        if($run){
            echo "Application submitted successfully";
        }
        else{
            echo "Application not submitted";
        }
    }
}
?>