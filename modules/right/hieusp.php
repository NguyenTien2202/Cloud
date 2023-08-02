<?php
	$sql_hieusp="select * from sanpham where sanpham.hieusp='$_GET[id]'";
	$num_hieusp=mysqli_query($conn,$sql_hieusp);
	$count=mysqli_num_rows($num_hieusp);
	
?>
<?php
	$sql_tenhieusp="select tenhieusp from hieusp ";
	$row=mysqli_query($conn,$sql_tenhieusp);
	$dong=mysqli_fetch_array($row);
?>
	<div class="tieude"></div>
                	<ul class="product">
                     <?php
					 if($count>0){
						while($dong_hieusp=mysqli_fetch_array($num_hieusp)){
						?>
                    	<li><a href="?quanly=chitietsp1&idhieusp=<?php echo $dong_hieusp['hieusp'] ?>&id=<?php echo $dong_hieusp['idsanpham'] ?>">
                       
                        	<img src="admincp/modules/quanlysanpham/uploads/<?php echo $dong_hieusp['hinhanh'] ?>" width="150" height="150" />
                            <p><?php echo $dong_hieusp['tensp'] ?></p>
                            <p style="color:purple;"><?php echo $dong_hieusp['giadexuat'] ?></p>
                            
                        	<p>Chi tiết</p>
                        </a></li>
                       <?php
						}
	}else{
		echo 'Hiện chưa có sản phẩm...';
	}
					   ?>
                    </ul>
                
            
            </div>