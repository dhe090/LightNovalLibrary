<meta charset="UTF-8">
<?php
include "database.php";

getConnection();

//get input and test if empty
$password = $_POST['password'];
$repassword= $_POST['repassword'];
if ($password!=$repassword) {
    exit("input password is different!");
}
$email = $_POST['email'];
$userName = $_POST['userName'];
if (!$userName || !$password || !$repassword || !$email) {
    echo("name,email and password cannot be empty!");
	exit();
}

// test for duplicate names
$userNameSQL = "select * from users where userName='$userName'";
if (!empty($connection)) {
    $result = mysqli_query($connection,$userNameSQL);
    if (mysqli_num_rows($result)>0) {
        closeConnection();
        echo("name already exist!");
        header("refresh:3;url = Register.html");
    }
}

$userNameSQL = "select * from users where email='$email'";
if (!empty($connection)) {
    $result = mysqli_query($connection,$userNameSQL);
    if (mysqli_num_rows($result)>0) {
        closeConnection();
        echo("email already exist!");
        header("refresh:3;url = Register.html");
    }
}

//checkbox validation
if(isset($_POST['checkboxes']) && $_POST['checkboxes']!="")
{
    echo 'checkbox is checked';
}else{
	echo 'you need to check the aggrement!';
}

$registerSQL = "insert into users values('$email','$userName','$password')";
mysqli_query($connection,$registerSQL);
$userID = mysqli_insert_id($connection);
echo " successfully registered!<br>";

//数据库再去获取用户信息
$userSQL = "select * from users where user_id=$userID";
$userRes = mysqli_query($connection,$userSQL);

header("refresh:3;url = LibraryMainPage.html");


closeConnection();

