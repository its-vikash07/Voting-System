<!DOCTYPE html>
<html lang="en">
<?php 
require('connection.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signing in..</title>
</head>
<?php
#This is the code for Admin login
if(isset($_POST['adminLogin']))
{
    $query = "SELECT * FROM `admin_login` WHERE  `admin_email`= '$_POST[admin_email]' AND `admin_password`='$_POST[admin_password]'";
    $result = mysqli_query($con,$query);

        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['AdminLoginId'] = true;
            header("location: ../Pages/AdminPage.php");
        }
        else
        {
        echo"
            <script>
                alert('Looks like you are not admin');
                window.location.href='../Pages/adminLogin.html';
            </script>
        ";
        }

}
else if(isset($_POST['studentLogin']))
{
    $query = "SELECT * FROM `voter_id` WHERE  `stu_email`= '$_POST[stu_email]' AND `stu_password`= '$_POST[stu_password]'";
    $result = mysqli_query($con,$query);

        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['StudentLoginId']=true;
            $_SESSION['userId']=$_POST['stu_email'];
            header("location: ../Pages/StudentPage.php");
        }
        else
        {
        echo"
            <script>
                alert('Email or Password is wrong');
                window.location.href='../Pages/StudentLogin.html';
            </script>
        ";
        }

}
?>
</html>
