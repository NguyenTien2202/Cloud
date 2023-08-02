<?php
	if(isset($_POST['logout'])){
		unset($_SESSION['dangnhap']);
		header('location:login.php');
	}
?>
<div class="menu">
    	<ul>
        	<li><a href="index.php?quanly=loaisp&ac=them">Quản lý loại sp</a></li>
             <li><a href="index.php?quanly=hieusp&ac=them">Quản lý hiệu sp</a></li>
            <li><a href="index.php?quanly=sanpham&ac=them">Quản lý sản phẩm</a></li>
            <form action="" method="post" enctype="multipart/form-data">
            <input type="submit" name="logout" value="Đăng xuất" style="background:#cdb6dd;color:black;width:200px;height:30px;" />
            </form>
        </ul>
       
    </div>
