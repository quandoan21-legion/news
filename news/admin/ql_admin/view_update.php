<?php 
require_once '../use/check_super_admin.php';
require_once '../use/head.php';
require_once '../../use/connect.php';
$ma = $_GET['ma'];

$sql = "select * from admin where ma = '$ma'";
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
	SDT
	<input type="text" name="sdt" value="<?php echo $each['sdt'] ?>">
	<br>
	Email
	<input type="email" name="email" value="<?php echo $each['email'] ?>">
	<br>
	Mật khẩu
	<input type="password" name="mat_khau" value="<?php echo $each['mat_khau'] ?>">
	<br>
	Cấp độ
	<input type="radio" name="cap_do" value="0" <?php if($each['cap_do']==0) echo "checked"; ?>>Admin
	<input type="radio" name="cap_do" value="1" <?php if($each['cap_do']==1) echo "checked"; ?>>Super Admin
	<br>
	<button>Sửa</button>
</form>
<?php 
require_once '../../use/disconnect.php';
require_once '../use/foot.php'; 
?>