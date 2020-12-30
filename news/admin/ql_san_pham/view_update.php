<?php 
require_once '../use/check_super_admin.php';
require_once '../use/head.php';
require_once '../../use/connect.php';
$ma = $_GET['ma'];

$sql = "select * from san_pham where ma = '$ma'";
$array_san_pham = mysqli_query($connect,$sql);
$san_pham = mysqli_fetch_array($array_san_pham);

$sql = "select * from nha_san_xuat";
$array_nha_san_xuat = mysqli_query($connect,$sql);
?>
<br>
<br>
<br>
<form action="process_update.php" method="post"  enctype="multipart/form-data">
	<input type="hidden" name="ma" value="<?php echo $san_pham['ma'] ?>">
	Tên
	<input type="text" name="ten" value="<?php echo $san_pham['ten'] ?>">
	<br>
	Giá
	<input type="number" name="gia" value="<?php echo $san_pham['gia'] ?>">
	<br>
	Lấy ảnh cũ
	<input type="hidden" name="anh_cu" value="<?php echo $san_pham['anh'] ?>">
	<img src="../../use/anh/<?php echo $san_pham['anh'] ?>" height='100'>
	<br>
	Chọn ảnh mới
	<input type="file" name="anh_moi">
	<br>
	Mô tả
	<textarea name="mo_ta"><?php echo $san_pham['mo_ta'] ?></textarea>
	<br>
	Nhà sản xuất
	<select name="ma_nha_san_xuat">
		<?php foreach ($array_nha_san_xuat as $nha_san_xuat): ?>
			<option value="<?php echo $nha_san_xuat['ma'] ?>" <?php if($nha_san_xuat['ma']==$san_pham['ma_nha_san_xuat']) echo "selected"; ?>>
				<?php echo $nha_san_xuat['ten'] ?>
			</option>
		<?php endforeach ?>
	</select>
	<br>
	<button>Sửa</button>
</form>
<?php 
require_once '../../use/disconnect.php';
require_once '../use/foot.php'; 
?>