<?php 
require_once '../use/check_admin.php';
require_once '../use/head.php';
require_once '../../use/connect.php';
$sql = "select * from nha_san_xuat";
$array = mysqli_query($connect,$sql);
?>
<br>
<br>
<br>
<form action="process_insert.php" method="post" enctype="multipart/form-data">
	Tên
	<input type="text" name="ten">
	<br>
	Giá
	<input type="number" name="gia">
	<br>
	Ảnh
	<input type="file" name="anh">
	<br>
	Mô tả
	<textarea name="mo_ta"></textarea>
	<br>
	Nhà sản xuất
	<select name="ma_nha_san_xuat">
		<?php foreach ($array as $nha_san_xuat): ?>
			<option value="<?php echo $nha_san_xuat['ma'] ?>">
				<?php echo $nha_san_xuat['ten'] ?>
			</option>
		<?php endforeach ?>
	</select>
	<br>
	<button>Thêm</button>
</form>
<?php 
require_once '../use/foot.php';
require_once '../../use/disconnect.php';

?>