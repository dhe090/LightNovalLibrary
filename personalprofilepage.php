<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<title>profile</title>
	<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css" >

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="jquery-3.6.0.min.js" ></script>
	<script src="jquery-3.6.0.js" ></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="stylesheet" type="text/css" href="library.css">
	<!-- prevent overriden -->
	<style>
	    body {
	        font-family: Arial !important;
	        line-height: revert !important;
	    }
	</style>
    <?php session_start(); ?>
    <?php
    function checkdefine($variable)
    {
        $isTouch = isset($variable);
        if ($isTouch == true) {
            return $variable;
        } else {
            return "";
        }
    }
    ?>
</head>
<body>

<div class="headerpage"></div>
<div class="container mt-5 mb-5" style="background-image: url(LightNovalLibrary/733833.jpg)">
	<form action="personalprofiledatabase.php"  method='post'>
	<div class="row d-flex align-items-center  justify-content-center">
		<div class="col-md-6 border-right">
			<div class="p-5 py-5">
				<div class=" align-items-center mb-4">
					<h2 class="text-right">Personal profile</h2>
				</div>
				<small class="mt-2 ">Enter your Email address:</small>
				<div class="row mt-0 mb-4 ">
					<div class="input-group ">
					<span class="input-group-text">
					 <i class="bi bi-mailbox "></i>
					</span>
						<input type="text" id = "email" class="form-control" value="<?php
                        echo $_SESSION['email'] ?>" placeholder="email">
					</div>
				</div>

				<small class="mt-2 ">Edit your password:</small>
				<div class="input-group mt-0 mb-4">
					<span class="input-group-text">
					 <i class="bi bi-key"></i>
					</span>
					<input type="password" id = "password" class="form-control" value="<?php
                    echo $_SESSION['password'] ?>" placeholder="password">
				</div>

				<small class="mt-2 ">Re enter your password:</small>
				<div class="input-group mt-0 mb-4">
					<span class="input-group-text">
					 <i class="bi bi-key-fill"></i>
					</span>
					<input type="password" id = "repassword" class="form-control" value="<?php
                    echo $_SESSION['password'] ?>" placeholder="Password">
				</div>

				<div class="row mt-2">
					<label class="labels">First Name and Last name</label>
					<div class="input-group mt-0 mb-4">
							<span class="input-group-text">
						      <i class="bi bi-person-fill"></i>
						    </span>
						<input type="text" id = "flName" aria-label="flName" class="form-control" value="<?php
                        echo $_SESSION['FLname'] ?>" placeholder="first last name">
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 border-right">

			<div class="p-5 py-5">

				<div class="row mt-2">
					<label class="labels">Country and Province</label>
					<div class="input-group mt-0 mb-4">
							<span class="input-group-text">
						      <i class="bi bi-house"></i>
						    </span>
						<input type="text" id = "Country" aria-label="Country" class="form-control" value="<?php
                        echo $_SESSION['Country'] ?>" placeholder="Country Name">
						<input type="text" id = "Province" aria-label="Province" class="form-control" value="<?php
                        echo $_SESSION['Province'] ?>" placeholder="Province Name">
					</div>
				</div>

				<div class="row mt-2">
					<label class="labels">Age and gender</label>
					<div class="input-group mt-0 mb-4">
							<span class="input-group-text">
						      <i class="bi bi-gender-ambiguous"></i>
						    </span>
						<input type="text" id = "Age" aria-label="Age" class="form-control" value="<?php
                        echo $_SESSION['Age'] ?>" placeholder="Age">
							<select class="form-control" id="Gender" >
								<option selected="gender" >Gender</option>
								<option  value="1">Male</option>
								<option  value="2">Female</option>
							</select>
					</div>
				</div>

				<div class="row mt-2">
					<label class="labels">UserName</label>
					<div class="input-group mt-0 mb-4">
							<span class="input-group-text">
						      <i class="bi bi-file-earmark-person"></i>
						    </span>
						<input type="text" aria-label="UserName" class="form-control" value="<?php
                        echo $_SESSION['userName'] ?>" placeholder="Website User Name">
					</div>
				</div>

			</div>
		</div>
		<div class="col-2 mb-5">
			<button2 type="submit" value = "Save Profile"  class="btn btn-primary btn-lg mt-3">Save Profile</button2>
		</div>
	</form>
 </div>
</div>



<!-- header included -->
<script src="jquery-3.6.0.js"></script>
<script>
    $(function(){
        /*公共部分
		 * 导航栏
		 * footer CopyRight
		 */
        $(".headerpage").load("Header.php");
    });
</script>
</body>
</html>