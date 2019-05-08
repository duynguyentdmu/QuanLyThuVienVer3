<?php
//chuoi ket noi 
	$conn = new mysqli('localhost', 'root', '', 'db_ls') or die(mysqli_error());
	if(!$conn){
		die("Lỗi nghiêm trọng: Không thể kết nối!");
	}