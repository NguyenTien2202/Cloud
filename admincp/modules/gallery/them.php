<?php
$sql=mysqli_query($conn,"select * from sanpham where idsanpham='$_GET[idsanpham]'");
$dong=mysqli_fetch_array($sql);
$id=$_GET['idsanpham'];
?>
<h3>Thêm hình ảnh sản phẩm</h3>
<form action="modules/gallery/xuly.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
<center><p style="margin-top:100px;margin-bottom:5px;"><input type="file" name="file[]" multiple ></p></center>
<center><p><input type="submit" name="upload" value="Uploads" ></p></center>
</form>