<?php 
require_once '../use/check_admin.php';
require_once '../use/head.php';
require_once '../../use/connect.php';
$sql = "select * from nha_san_xuat";
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
		<th>Sửa</th>
		<th>Xoá</th>
	</tr>
	<?php foreach ($array as $each): ?>
		<tr>
			<td>
				<?php echo $each['ten'] ?>
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