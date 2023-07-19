<?php
	$sqli_loai="select * from loaisp order by tenloaisp,idloaisp asc";
	$row_loai=mysqli_query($conn,$sqli_loai);
?>
<div class="box_list">
            <div class="tieude">
            	<h3>Loại phụ kiện</h3>
            </div>
            	<ul class="list">
                <?php
				while($dong_loai=mysqli_fetch_array($row_loai)){
				?>
                	<li><a href="index.php?quanly=loaisp&id=<?php echo $dong_loai['tenloaisp'] ?>"><?php echo $dong_loai['tenloaisp'] ?></a></li>
                  <?php
				}
				  ?>
                </ul>
                </div><!--Ket thuc div box loai phu kien -->
				
                 <div class="box_list">
                 
                   <div class="tieude">
            	<h3>Hàng bán chạy</h3>
            		</div>
                    <?php
					$sqli_banchay=mysqli_query($conn,"select * from sanpham order by idsanpham desc limit 8");
					
					?>
            	<ul class="hangbanchay">	
                <?php
				while($dong_banchay=mysqli_fetch_array($sqli_banchay)){
				?>
                	<li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong_banchay['loaisp'] ?>&id=<?php echo $dong_banchay['idsanpham'] ?>">
                    	<img src="admincp/modules/quanlysanpham/uploads/<?php echo $dong_banchay['hinhanh'] ?>" width="150" height="150" />
                    	<p><?php echo $dong_banchay['tensp'] ?></p>
                        <p style="color:red;"><?php echo number_format($dong_banchay['giadexuat']).' '.'VNĐ' ?></p>
                    </a></li>
                    <?php
				}
					?>
                </ul>
                </div><!--Ket thuc div box hang ban chay -->
                