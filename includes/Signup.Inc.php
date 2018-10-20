<?php

if(isset($_POST['submit']))
{
    include_once'DBH.Inc.php';
    $name= mysqli_real_escape_string($conn,$_POST['name']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $day=mysqli_real_escape_string($conn,$_POST['Day']);
    $month=mysqli_real_escape_string($conn,$_POST['Month']);
    $year=mysqli_real_escape_string($conn,$_POST['Year']);
    
    //Error Handlers
    
    $error=array("name"=>0,"phone"=>0,"email"=>0,"password"=>0,"gender"=>0,"day"=>0,"month"=>0,"year"=>0);
    $valid_data = true;
    
    //Check For Empty Feilds
    
    if(empty($name) || !preg_match("/^[a-zA-Z ]*$/",$name)){
        $error['name'] = 1;
        $valid_data = false;
    }
    if(empty($phone) || !preg_match("/^01[0-9]{9}$/",$phone))
    {
         $error['phone'] = 1;
        $valid_data = false;
    }
    if(empty( $email)||!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $error['email'] = 1;
        $valid_data = false;
    }
    if(empty($password)||!preg_match("/^[a-zA-Z0-9]*$/",$password))
    {
        $error['password']=1;
        $valid_data = false;
    }
    if(empty( $gender))
    {
        $error['gender']=1;
        $valid_data = false;
    }
    if(empty( $day)||validate_day($day))
    {
        $error['day']=1;
        $valid_data = false;
    }
    if(empty( $month)||validate_month($month))
    {
        $error['month']=1;
        $valid_data = false;
    }
    if(empty($year)||validate_year($year))
    {
        $error['year']=1;
        $valid_data = false;
    }
    if($valid_data)
    {
         $sql="SELECT*FROM user WHERE email='$email'";
         $result= mysqli_query($conn,$sql);
         $resultCheck = mysqli_num_rows($result);
         if($resultCheck > 0)
         {
             header("Location: ../test.php?test=usertaken");
             exit();
         }
         else
         {
             //Hashing The Password
             $hashpwd = password_hash($password,PASSWORD_DEFAULT);
             move_uploaded_file($_FILES['image']['tmp_name'], '../image/users_pictures/'.$email);
             //Insert user into database
             $sql="INSERT INTO user(name,phone,email,password,gender,day,month,year) VALUES('$name','$phone','$email','$hashpwd','$gender','$day','$month','$year');";
             mysqli_query($conn,$sql);
             header("Location: ../test.php?test=Success");
             exit();
         }
     }
    else
    {
        $checked = "";
        foreach($error as $k => $v){
            if($v == 1){
                $checked .= $k . '=' . $v. '&';
            }
        }
//        header("Location: ../test.php?$checked");
        print_r($_POST);
        print_r($error);
        exit();
    }
}
else
{
   header("Location: ../test.php");
}


function validate_gender($g){
    if($g == 2 || $g == 1)
        return 0;
    else
        return 1;
}
function validate_day($d){
   if($d>=1 || $d<=31)
       return 0;
    else
        return 1;
}
function validate_month($m){
   if($m>=1 || $d<=12)
       return 0;
    else
        return 1;
}
function validate_year($y){
   if($y>=1980 || $y<=2024)
       return 0;
    else
       return 1;
}
?>