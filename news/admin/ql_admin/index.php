<?php 
require_once '../use/check_super_admin.php';
require_once '../use/head.php';
require_once '../../use/connect.php';
$sql = "select * from admin";
$array = mysqli_query($connect,$sql);
?>
<table width="100%" border="1">
	<caption>
		<a href="view_insert.php">
			Thêm
		</a>
	</caption>
	<tr>
		<th>Tên</th>
		<th>Email</th>
		<th>SDT</th>
		<th>Cấp độ</th>
		<th>Sửa</th>
		<th>Xoá</th>
	</tr>
	<?php foreach ($array as $each): ?>
		<tr>
			<td>
				<?php echo $each['ten'] ?>
			</td>
			<td>
				<?php echo $each['email'] ?>
			</td>
			<td>
				<?php echo $each['sdt'] ?>
			</td>
			<td>
				<?php 
				echo ($each['cap_do']==1) ? "Super Admin" : "Admin" 
				?>
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