<?php
	@session_start();
	if(isset($_POST['dangnhap'])){
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$sql=mysqli_query($conn,"select * from dangky where email='$email' and matkhau='$pass' limit 1");
		$count=mysqli_num_rows($sql);
		if($count>0){
			$tendangnhap=$_SESSION['dangnhap']=$email;
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Bạn đã đăng nhập thành công.</p>';
			echo '<a href="index.php?quanly=dathang" style="font-size:20px;">Quay lại để thanh toán</a>';
		}else{
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Email và Tài khoản bị sai</p>';
		}
	}
?>
<div class="tieude">
	Hoan nghênh quý khách hàng đến với shop Tiencute.Hamster!!	
</div>
<div class="thongbao">
	<p><img src="imgs/chu-y-mua-hang.png" width="100" height="50"></p>
    <p>- Đơn hàng nhiều sản phẩm. Vui lòng liệt kê danh sách + số lượng qua Email, Zalo</p>
</div>
<div class="dangky">
  <p style="font-size:18px; color:purple;margin:5px;">Các mục dấu * là bắt buộc tối thiểu. Vui lòng điền đầy đủ và chính xác (Số nhà, Ngõ, thôn xóm/ấp, Phường/xã, huyện/quận, tỉnh, TP)</p>
  <form action="" method="post" enctype="multipart/form-data">
	<table width="100%" border="1" style="border-collapse:collapse;">
  <tr>
    <td width="40%">Email : <strong style="color:purple;"> (*)</strong></td>
    <td width="60%"><input type="text" name="email" size="50"></td>
  </tr>
    <td>Mật khẩu : <strong style="color:purple;"> (*)</strong></td>
   <td width="60%"><input type="password" name="pass" size="50"></td>
  </tr>
  <tr>
    <td colspan="2">
    	 
           <p><input type="submit" name="dangnhap" value="Đăng nhập" /></p>
         
    </td>
    </tr>
</table>
</form>

</div>

	<h3><a href="?quanly=dangkymoi" style="text-decoration:none;color:#FFF;margin:10px;border-radius:10px;padding:5px;;background:rgb(106, 106, 210);float:right;" >Đăng ký tài khoản để mua hàng.</a></h3>

