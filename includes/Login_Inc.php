<?php

session_start();

if(isset($_POST['submit']))
{
    include 'DBH.Inc.php';
    
    $email=mysqli_real_escape_string($conn,$_POST['mail']);
    $password=mysqli_real_escape_string($conn,$_POST['pass']);
     //Error Handlers
    //Check For Empty Feilds
    if(empty( $email)||empty($password))
    {
        header("Location: ../test.php?error=data");
        exit();
    }
    else{
        $sql="SELECT*FROM user WHERE email='$email'";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);
        if($resultCheck<1)
        {
            //include("wrong_password.php");
            header("Location: ../test.php?error=mail");
        }
        else
        {
            if($row=mysqli_fetch_assoc($result))
            {
                //dehashing password
                $hashedpwdcheck=password_verify($password,$row['password']);
                if($hashedpwdcheck==false)
                {
                   header("Location: ../test.php?error=password");
                   exit(); 
                }
                elseif($hashedpwdcheck==true)
                {
                    //login the user here
                    $_SESSION['id']=$row['id'];
                    $_SESSION['name']=$row['name'];
                    $_SESSION['phone']=$row['phone'];
                    $_SESSION['email']=$row['email'];
                    $_SESSION['password']=$row['password'];
                    $_SESSION['gender']=$row['gender'];
                    $_SESSION['day']=$row['day'];
                    $_SESSION['month']=$row['month'];
                    $_SESSION['year']=$row['year'];
                     header("Location: ../Task.php?login=success");
                     exit();
                }
            }
        }
    }
}
else{
     header("Location: ../test.php?error=veryerror");
}

?>