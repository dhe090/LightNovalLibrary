<meta charset="UTF-8">
<?php
include "database.php";

session_start();
getConnection();

//get input and test if empty

$userName = $_POST['userName'];
$FLname = $_POST['flName'];
$password = $_POST['password'];
$repassword= $_POST['repassword'];
$email = $_POST['email'];
$Country = $_POST['Country'];
$Province = $_POST['Province'];
$Age = $_POST['Age'];
$Gender = $_POST['Gender'];


// test for duplicate names
$userNameSQL = "select * from profiles where userName='$userName'";
if (!empty($connection)) {
    $result = mysqli_query($connection,$userNameSQL);
    if (mysqli_num_rows($result)>0) {
        closeConnection();
        echo("name already exist!");
        header("refresh:3;url = Register.html");
    }
}

$emailSQL = "select * from profiles where email='$email'";
if (!empty($connection)) {
    $result = mysqli_query($connection,$emailSQL);
    if (mysqli_num_rows($result)>0) {
        closeConnection();
        echo("email already exist!");
        header("refresh:3;url = Register.html");
    }
}

$olduserName = $_SESSION['userName'];
$oldemail = $_SESSION['email'];
$oldpassword = $_SESSION['password'];

if ($olduserName != $userName){
    $registerSQL = "update profiles set userName ='$userName' where userName = '$olduserName'";
    mysqli_query($connection,$registerSQL);
    $userprofile = mysqli_insert_id($connection);
}

if ($oldemail != $email){
    $registerSQL = "update profiles set email ='$email' where email = '$oldemail'";
    mysqli_query($connection,$registerSQL);
    $userprofile = mysqli_insert_id($connection);
}

if ($oldpassword != $password){
    $registerSQL = "update profiles set password ='$password' where password = '$oldpassword'";
    mysqli_query($connection,$registerSQL);
    $userprofile = mysqli_insert_id($connection);
}


$registerSQL = "insert into profiles values('$Country', '$Province','$Age' ,'$Gender' ,'$FLname','$userName')";
mysqli_query($connection,$registerSQL);
$userprofile = mysqli_insert_id($connection);
echo "successfully insert profiles!<br>";

//数据库再去获取用户信息
$userSQL = "select * from profiles where user_id=$userprofile";
$userRes = mysqli_query($connection,$userSQL);

header("refresh:3;url = LibraryMainPage.html");


closeConnection();

?>

