<meta charset="UTF-8">
<?php
include "database.php";

$servername = "localhost";
$username = "root";
$password = "123456";
$con = new mysqli($servername, $username, $password);
if ($con->connect_error) {
    echo "fail: " . $con->connect_error . "<br>";
} else {
    echo "success";
}
$sql = "CREATE DATABASE users1";
if($con->query($sql) == true) {
    echo "create users1 success ！<br>";
} else {
    echo "create database users1 fail！<br>";
}

$dbname = "users1";
$con = new mysqli($servername, $username, $password, $dbname);
// 创建数据表 primary key
$sql = "CREATE TABLE login (
            userName VARCHAR(32) PRIMARY KEY,
            email VARCHAR(32),
            password VARCHAR(32)
        )";
if ($con->query($sql) == true) {
    echo "create table login success<br>";
} else {
    echo "create table login fails<br>";
}

$sql = "INSERT INTO login (userName, email, password) VALUES ('dahonghe', 'dhe090@uottawa.ca', 'xingyuhe123')";
if($con->query($sql) == true) {
    echo "insert success<br>";
} else {
    echo "insert fail<br>";
}
$sql = "INSERT INTO login (userName, email, password) VALUES ('huangshan', 'huangshan@uottawa.ca', 'xingyuhe123456')";
if($con->query($sql) == true) {
    echo "insert success<br>";
} else {
    echo "insert fail<br>";
}

$sql ="CREATE TABLE post (
            postId INT,
            title VARCHAR(32),
            message text NOT NULL,
            categoryId int(11) NOT NULL,
            userName VARCHAR(32) NOT NULL,
            PRIMARY KEY (postId),
            FOREIGN KEY (userName) REFERENCES login(userName)          
        )";
if($con->query($sql) == true) {
    echo "build post table success<br>";
} else {
    echo "build post table fail<br>";
}

$sql ="CREATE TABLE category (
            categoryId INT,
            name VARCHAR(32),
            PRIMARY KEY (categoryId)
        )";
if($con->query($sql) == true) {
    echo "build category table success<br>";
} else {
    echo "build category table fail<br>";
}

$sql = "INSERT INTO post (postId, title, message ,categoryId ,userName) VALUES ('0001','spice_and_wolf1','volumn 1 in english','01','huangshan')";
if($con->query($sql) == true) {
    echo "insert success<br>";
} else {
    echo "insert fail<br>";
}

$sql = "INSERT INTO post (postId, title, message ,categoryId ,userName) VALUES ('0002','86_2','86 volumn 2 in english','02','dahonghe')";
if($con->query($sql) == true) {
    echo "insert success<br>";
} else {
    echo "insert fail<br>";
}

$sql = "INSERT INTO category (categoryId, name) VALUES ('0001','phantasy')";
if($con->query($sql) == true) {
    echo "insert success<br>";
} else {
    echo "insert fail<br>";
}

$sql = "INSERT INTO category (categoryId, name) VALUES ('0002','war')";
if($con->query($sql) == true) {
    echo "insert success<br>";
} else {
    echo "insert fail<br>";
}

$sql ="CREATE TABLE profiles (
            Country VARCHAR(32),
            Province VARCHAR(32),
            Age INT(10),
            Gender VARCHAR(32),
            FLname VARCHAR(32),
            userName VARCHAR(32),
            PRIMARY KEY (FLname),
            FOREIGN KEY (userName) REFERENCES login(userName)          
        )";
if($con->query($sql) == true) {
    echo "build post table success<br>";
} else {
    echo "build post table fail<br>";
}

$sql = "INSERT INTO profiles (Country, Province,Age ,Gender ,FLname ,userName) VALUES ('China','guangdong','22','Male','Dahong He','dahonghe')";
if($con->query($sql) == true) {
    echo "insert success<br>";
} else {
    echo "insert fail<br>";
}

$sql = "INSERT INTO profiles (Country, Province,Age ,Gender ,FLname ,userName) VALUES ('China','sichuan','25','Male','wang zhiren','huangshan')";
if($con->query($sql) == true) {
    echo "insert success<br>";
} else {
    echo "insert fail<br>";
}


$con->close();


?>



