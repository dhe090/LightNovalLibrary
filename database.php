<meta charset="UTF-8">

<?php

function getConnection(){
	//php get database information
    $hostname = 'localhost';
    $database = 'users1';
    $userName = 'root';
    $password = '123456';
    global $connection;

	//trying connection to the database
    $connection = @mysqli_connect($hostname,$userName,$password,$database);
    if (mysqli_connect_errno($connection))
    {
        echo "连接 MySQL 失败: " . mysqli_connect_error();
    }
    mysqli_query($connection,'set names utf8');
    @mysqli_select_db($connection,$database) or die(mysqli_error());
}

function closeConnection(){
    global $connection;
	//if false then close.
    if($connection){
        mysqli_close($connection) or die(mysqli_error());
    }
}

