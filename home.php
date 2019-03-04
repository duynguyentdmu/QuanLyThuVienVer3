<!DOCTYPE html>
<?php
	require_once 'valid.php';
?>	
<html lang = "eng">
	<head>
		<title>HỆ THỐNG QUẢN LÝ THƯ VIỆN THPT NGUYỄN TRÃI</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
        <!-- Start WOWSlider.com HEAD section -->
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>
        <!-- End WOWSlider.com HEAD section -->
	</head>
	<body style = "background-color:#d3d3d3;"> <!-- mau nen phia sau trang web-->
		<nav class = "navbar navbar-default navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/logo.png" width = "50px" height = "50px" />
					<h4 class = "navbar-text navbar-right">HỆ THỐNG QUẢN LÝ THƯ VIỆN TRƯỜNG THPT NGUYỄN TRÃI</h4>
				</div>
			</div>
		</nav>
		<div class = "container-fluid">
			<div class = "col-lg-2 well" style = "margin-top:60px;">
				<div class = "container-fluid">
                    <a href="user.php" ><img src = "images/user.png" width = "50px" height = "50px" ></a>

					<br />
					<br />
					<label class = "text-muted"><?php require'account.php'; echo $name;?></label>
				</div>
				<hr style = "border:1px dotted #d3d3d3;"/>
				<ul id = "menu" class = "nav menu">
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "home.php"><i class = "glyphicon glyphicon-home"></i> Trang Chủ</a></li>
                    <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "information.php"><i class = "glyphicon glyphicon-home"></i> Giới Thiệu</a></li>
					<!--<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = ""><i class = "glyphicon glyphicon-tasks"></i> QL Tài Khoản</a> -->
                    <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "admin.php"><i class = "glyphicon glyphicon-tasks"></i> Người Quản Lý</a></li>
                    <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "student.php"><i class = "glyphicon glyphicon-tasks"></i> Học Sinh́</a></li>
                        <!--<ul style = "list-style-type:none;">
                            <li><a href = "admin.php" style = "font-size:15px;"><i class = "glyphicon glyphicon-user"></i> Quản Lý</a></li>
                            <li><a href = "student.php" style = "font-size:15px;"><i class = "glyphicon glyphicon-user"></i> Học Sinh</a></li>
                        </ul>
					</li>-->
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "book.php"><i class = "glyphicon glyphicon-book"></i> QL Sách</a></li>
                    <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "borrowing.php"><i class = "glyphicon glyphicon-book"></i> Mượn Sách</a></li>
                    <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "returning.php"><i class = "glyphicon glyphicon-book"></i> Trả Sách</a></li>

                 <!--   <li><a href = "borrowing.php" style = "font-size:15px;"><i class = "glyphicon glyphicon-random"></i> Mượn Sách</a></li>
                    <li><a href = "returning.php" style = "font-size:15px;"><i class = "glyphicon glyphicon-random"></i> Trả Sách</a></li>-->

                    <!--Library System <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = ""><i class = "glyphicon glyphicon-th"></i> Thao Tác</a>
                       <ul style = "list-style-type:none;">
                           <li><a href = "borrowing.php" style = "font-size:15px;"><i class = "glyphicon glyphicon-random"></i> Mượn Sách</a></li>
                           <li><a href = "returning.php" style = "font-size:15px;"><i class = "glyphicon glyphicon-random"></i> Trả Sách</a></li>
                       </ul>-->
					</li>
					<li><a  style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = ""><i class = "glyphicon glyphicon-cog"></i> Cài Đặt</a>
						<ul style = "list-style-type:none;">
							<li><a style = "font-size:15px;" href = "logout.php"><i class = "glyphicon glyphicon-log-out"></i> Đăng Xuất</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class = "col-lg-1"></div>
			<div class = "col-lg-9 well" style = "margin-top:60px;">
                <!--<img src = "images/back2.jpg" height = "400px" width = "100%" /> -->
                <!-- Start WOWSlider.com BODY section -->
                <div id="wowslider-container1">
                    <div class="ws_images"><ul>
                            <li><img src="data1/images/126749largelibrarybackground1920x1080.jpg" alt="" title="" id="wows1_0"/></li>
                            <li><a href="http://wowslider.net"><img src="data1/images/20170509_eng_library_dja_012_3.jpg" alt="image slider" title="" id="wows1_1"/></a></li>
                            <li><img src="data1/images/photo1524995997946a1c2e315a42f.jpg" alt="" title="" id="wows1_2"/></li>
                        </ul></div>
                    <div class="ws_bullets"><div>
                            <a href="#" title=""><span><img src="data1/tooltips/126749largelibrarybackground1920x1080.jpg" alt=""/>1</span></a>
                            <a href="#" title=""><span><img src="data1/tooltips/20170509_eng_library_dja_012_3.jpg" alt=""/>2</span></a>
                            <a href="#" title=""><span><img src="data1/tooltips/photo1524995997946a1c2e315a42f.jpg" alt=""/>3</span></a>
                        </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net"></a> </div>
                    <div class="ws_shadow"></div>
                </div>
                <script type="text/javascript" src="engine1/wowslider.js"></script>
                <script type="text/javascript" src="engine1/script.js"></script>
                <!-- End WOWSlider.com BODY section -->


            </div>
		</div>
		<nav class = "navbar navbar-default navbar-fixed-bottom">
			<div class = "container-fluid">
				<label class = "navbar-text pull-right">HỆ THỐNG QUẢN LÝ THƯ VIỆN THPT NGUYỄN TRÃI</label>
			</div>
		</nav>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
	<script src = "js/sidebar.js"></script>
</html>