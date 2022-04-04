<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css" >

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="jquery-3.6.0.min.js" ></script>
	<script src="jquery-3.6.0.js" ></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<style>
        body{
            font-family: Arial !important;
            line-height: revert !important;
            background: #ffffff;
            color: rgb(26, 68, 133);
        }
        .icon-1x {
            font-size: 24px !important;
        }
        a{
            text-decoration:none;
        }
        .text-primary, a.text-primary:focus, a.text-primary:hover {
            color: rgb(84, 39, 174) !important;
        }
        .text-black, .text-hover-black:hover {
            color: #000 !important;
        }
        .font-weight-bold {
            font-weight: 700 !important;
        }
	</style>
</head>
<body>
<div class="headerpage"></div>
<div class="container">
	<div class="row">
		<!-- Main content -->
		<div class="col-lg-9 mb-3">
			<div class="row text-left mb-5">
				<div class="col-lg-6 mb-3 mb-sm-0">
					<div class="dropdown bootstrap-select mt-3 bg-white  w-lg-50" style="width: 800px;">
						<select class="form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50" data-toggle="select" tabindex="-98">
							<option> Science fiction </option>
							<option> War </option>
							<option> Phantasy </option>
							<option> School </option>
						</select>
					</div>
				</div>
			</div>
			<!-- End of post 1 -->
			<div class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
				<div class="row align-items-center">
					<div class="col-md-8 mb-3 mb-sm-0">
						<h5>
							<a href="#" class="text-primary">The volumn one for spice and wolf</a>
						</h5>
						<p class="text-sm"><span class="op-6">Posted by</span> <a class="text-grey" href="#"><?php
                                session_start(); echo $_SESSION['userName'] ?></a></p>

					</div>
					<div class="col-md-4 op-7">
						<div class="row text-center op-7">
							<div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span class="d-block text-sm"> Replys</span> </div>
							<div class="col px-1"> <i class="ion-ios-eye-outline icon-1x"></i> <span class="d-block text-sm"> Views</span> </div>
						</div>
					</div>
				</div>
			</div>

			<!-- /End of post 1 -->
			<!-- End of post 2 -->
			<div class="card row-hover pos-relative py-3 px-3 mb-3 border-primary border-top-0 border-right-0 border-bottom-0 rounded-0">
				<div class="row align-items-center">
					<div class="col-md-8 mb-3 mb-sm-0">
						<h5>
							<a href="#" class="text-primary">Volumn 2 of 86</a>
						</h5>
						<p class="text-sm"><span class="op-6">Posted by</span> <a class="text-grey" href="#"><?php
                                 echo $_SESSION['userName'] ?></a></p>

					</div>
					<div class="col-md-4 op-7">
						<div class="row text-center op-7">
							<div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span class="d-block text-sm"> Replys</span> </div>
							<div class="col px-1"> <i class="ion-ios-eye-outline icon-1x"></i> <span class="d-block text-sm"> Views</span> </div>
						</div>
					</div>
				</div>
			</div>
			<!-- /End of post 2 -->

		</div>
		<!-- Sidebar content -->
		<div class="col-lg-3 mb-4 mb-lg-0 px-lg-0 mt-lg-0 ">
			<div style="visibility: hidden; display: none; width: 285px; height: 801px; margin: 0px; float: none; position: static; inset: 85px auto auto;"></div><div data-settings="{&quot;parent&quot;:&quot;#content&quot;,&quot;mind&quot;:&quot;#header&quot;,&quot;top&quot;:10,&quot;breakpoint&quot;:992}" data-toggle="sticky" class="sticky" style="top: 85px;"><div class="sticky-inner">

					<div class="bg-white mb-3">
						<h4 class="px-3 py-4 op-5 m-0">
							Active Topics
						</h4>
						<hr class="m-0">
						<div class="pos-relative px-3 py-3">
							<h6 class="text-primary text-sm">
								<a href="#" class="text-primary">The volumn one for spice and wolf </a>
							</h6>
							<p class="text-sm"><span class="op-6">Posted by</span> <a class="text-grey" href="#"><?php
                                    echo $_SESSION['userName'] ?></a></p>
						</div>
						<hr class="m-0">
						<div class="pos-relative px-3 py-3">
							<h6 class="text-primary text-sm">
								<a href="#" class="text-primary">Volumn 2 of 86 </a>
							</h6>
							<p class="text-sm"><span class="op-6">Posted by</span> <a class="text-grey" href="#"><?php
                                     echo $_SESSION['userName'] ?></a></p>
						</div>
						<hr class="m-0">
						<div class="pos-relative px-3 py-3">
							<h6 class="text-primary text-sm">
								<a href="#" class="text-primary"> <br></a>
							</h6>
							<p></p>
						</div>
						<hr class="m-0">
						<div class="pos-relative px-3 py-3">
							<h6 class="text-primary text-sm">
								<a href="#" class="text-primary"> <br></a>
							</h6>
							<p></p>
						</div>
						<hr class="m-0">
					</div>
					<div class="bg-white text-sm">
						<h4 class="px-3 py-4 op-5 m-0 roboto-bold">
							Stats
						</h4>
						<hr class="my-0">
						<div class="row text-center d-flex flex-row op-7 mx-0">
							<div class="col-sm-6 flex-ew text-center py-3 border-bottom border-right"> <a class="d-block lead font-weight-bold" href="#">4</a> Topics </div>
							<div class="col-sm-6 col flex-ew text-center py-3 border-bottom mx-0"> <a class="d-block lead font-weight-bold" href="#">number</a> Posts </div>
						</div>
						<div class="row d-flex flex-row op-7">
							<div class="col-sm-6 flex-ew text-center py-3 border-right mx-0"> <a class="d-block lead font-weight-bold" href="#">number</a> Members </div>
							<div class="col-sm-6 flex-ew text-center py-3 mx-0"> <a class="d-block lead font-weight-bold" href="#"><?php
                                    echo $_SESSION['userName'] ?></a> current User </div>
						</div>
					</div>
				</div></div>
		</div>
	</div>
</div>

</body>
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
</html>