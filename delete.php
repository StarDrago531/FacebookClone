<?php
    $con = mysqli_connect('localhost','root','','facebookclone');
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check = mysql_query($con,"DELETE FROM userdata WHERE phoneoremail = '$phoneoremail'");

    if($check > 0){
        header('Location:http://localhost/facebookcloneboilerplate/');
    }
?>