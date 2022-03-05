<meta charset="UTF-8">
<?php
include ("database.php");

$userName = $_POST['userName'];
$password = $_POST['password'];

getConnection();
//判断输入的用户名和密码是否正确
$sql = "select * from users where userName='$userName' and password='$password'";
if (!empty($connection)) {
    $res = mysqli_query($connection,$sql);
    if(mysqli_num_rows($res)>0){
        echo ("login success");
        header("refresh:3; url=LibraryMainPage.html");
    }else{
        echo "login fail!";
    }
}

closeConnection();
