<meta charset="UTF-8">
<?php
include "database.php";

session_start();
getConnection();

$userName = $_POST['userName'];
$password = $_POST['password'];

$emailquery = "select email from login where userName='$userName'";
if (!empty($connection)) {
    $resultemail = mysqli_query($connection,$emailquery);
    $row = mysqli_fetch_assoc($resultemail);
}

$flnamequery = "select FLname from profiles where userName='$userName'";
if (!empty($connection)) {
    $resultflname = mysqli_query($connection,$flnamequery);
    $row2 = mysqli_fetch_assoc($resultflname);
}

$countryquery = "select Country from profiles where userName='$userName'";
if (!empty($connection)) {
    $resultcountry = mysqli_query($connection,$countryquery);
    $row3 = mysqli_fetch_assoc($resultcountry);
}

$provincequery = "select Province from profiles where userName='$userName'";
if (!empty($connection)) {
    $resultprovince = mysqli_query($connection,$provincequery);
    $row4 = mysqli_fetch_assoc($resultprovince);
}

$agequery = "select Age from profiles where userName='$userName'";
if (!empty($connection)) {
    $resultage = mysqli_query($connection,$agequery);
    $row5 = mysqli_fetch_assoc($resultage);
}


//判断输入的用户名和密码是否正确
$sql = "select * from login where userName='$userName' and password='$password'";
if (!empty($connection)) {
    $res = mysqli_query($connection,$sql);
    if(mysqli_num_rows($res)>0){
        $_SESSION['userName'] = $userName;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $row['email'];
        $_SESSION['FLname'] = $row2['FLname'];
        $_SESSION['Country'] = $row3['Country'];
        $_SESSION['Province'] = $row4['Province'];
        $_SESSION['Age'] = $row5['Age'];
        echo ("login success");
    }else{
        echo "login fail!";
    }
    header("refresh:3; url=LibraryMainPage.html");
}

closeConnection();
