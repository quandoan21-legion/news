<?php 
require_once '../use/check_super_admin.php';
require_once '../use/head.php';
require_once '../../use/connect.php';
$ma = $_GET['ma'];

$sql = "select * from nha_san_xuat where ma = '$ma'";
$array = mysqli_query($connect,$sql);
$each = mysqli_fetch_array($array);
?>
<br>
<br>
<br>
<form action="process_update.php">
	<input type="hidden" name="ma" value="<?php echo $each['ma'] ?>">
	Tên
	<input type="text" name="ten" value="<?php echo $each['ten'] ?>">
	<br>
	<button>Sửa</button>
</form>
<?php 
require_once '../../use/disconnect.php';
require_once '../use/foot.php'; 
?>