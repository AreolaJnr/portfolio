<?php
date_default_timezone_set('Africa/Lagos');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];
    $subscribe = isset($_POST['subscribe']) ? 1 : 0;

    $servername = "sql309.infinityfree.com";
    $username = "if0_36555298";
    $dbpassword = "17AzzDsJu5Le";
    $database = "if0_36555298_hire_me";

    $to = 'kollybobo42@gmail.com';
    $subject = 'New Form Submission';
    $body = "Name: $name\n Email: $email\n Phone Number: $tel\n Message: $message\n Subscription: $subscribe\n";
    $header = "From: kolade.areola.pro@gmail.com" ;
            

    $connection = mysqli_connect($servername,$username,$dbpassword,$database) or die(mysql_error());
    $sql = "INSERT INTO hire_me(SN,Name,Email,Tel,Message_,Subscribe)VALUES('', '
    $name','$email','$tel',' $message','$subscribe')";
    $result =mysqli_query($connection,$sql);

    if ( $result == true){
        echo'Form Submitted Successfully';
    } else {
        echo 'Error submitting form';
    }
}