<!DOCTYPE html>
<?php
require_once 'valid.php';
?>
<html lang = "eng">
<head>
    <title>HỆ THỐNG QUẢN LÝ THƯ VIỆN</title>
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
            <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "information.php"><i class = "glyphicon glyphicon-home"></i> Thông Tin</a></li>
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




        <div class = "col-lg-3"></div>
        <div class = "col-lg-6">
           <!-- <form method = "POST" action = "edit_admin_query.php?admin_id=<?php echo $fedit_admin['admin_id']?>" enctype = "multipart/form-data">-->
                <div >
                    <label>Admin ID:</label>
                    <input type = "text" value = "<?php echo $fedit_admin['username']?>" required = "required" name = "username" class = "form-control" />
                </div>
                <div >
                    <label>Tài khoàn:</label>
                    <input type = "text" value = "<?php echo $fedit_admin['username']?>" required = "required" name = "username" class = "form-control" />
                </div>
                <div >
                    <label>Mật khẩu:</label>
                    <input type = "password" value = "<?php echo $fedit_admin['password']?>"  maxlength = "12" name = "password" required = "required" class = "form-control" />
                </div>
                <div >
                    <label>Họ:</label>
                    <input type = "text" value = "<?php echo $fedit_admin['firstname']?>"  name = "firstname" required = "required" class = "form-control" />
                </div>
                <div >
                    <label>Tên đệm:</label>
                    <input type = "text" value = "<?php echo $fedit_admin['middlename']?>"  name = "middlename" placeholder = "(Không bắt buộc)" class = "form-control" />
                </div>
                <div >
                    <label>Tên:</label>
                    <input type = "text" value = "<?php echo $fedit_admin['lastname']?>"  required = "required" name = "lastname" class = "form-control" />
                </div>
                <div >
                    <button class = "btn btn-warning" name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Lưu thay đổi</button>
                </div>
            </form>
        </div>

















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
<script src = "js/jquery.dataTables.js"></script>
<script type = "text/javascript">
</html>