<?php 
require_once '../use/check_admin.php';
require_once '../use/head.php';
require_once '../../use/connect.php';
$sql = "select san_pham.*, nha_san_xuat.ten as ten_nha_san_xuat 
from san_pham 
join nha_san_xuat on nha_san_xuat.ma = san_pham.ma_nha_san_xuat";
$array = mysqli_query($connect,$sql);
// die($sql);
?>
<table width="100%" border="1">
	<caption>
		<a href="view_insert.php">
			Thêm
		</a>
	</caption>
	<tr>
		<th>Tên</th>
		<th>Giá</th>
		<th>Ảnh</th>
		<th>Mô Tả</th>
		<th>Nhà Sản Xuất</th>
		<th>Sửa</th>
		<th>Xoá</th>
	</tr>
	<?php foreach ($array as $each): ?>
		<tr>
			<td>
				<?php echo $each['ten'] ?>
			</td>
			<td>
				<?php echo $each['gia'] ?>
			</td>
			<td>
				<img src="../../use/anh/<?php echo $each['anh'] ?>" height='200'>
			</td>
			<td>
				<?php echo $each['mo_ta'] ?>
			</td>
			<td>
				<?php echo $each['ten_nha_san_xuat'] ?>
			</td>
			<td>
				<a href="view_update.php?ma=<?php echo $each['ma'] ?>">
					Sửa
				</a>
			</td>
			<td>
				<a href="delete.php?ma=<?php echo $each['ma'] ?>">
					Xoá
				</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>

<?php 
require_once '../../use/disconnect.php';
require_once '../use/foot.php';
?>