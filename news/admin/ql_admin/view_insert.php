<?php 
require_once '../use/check_super_admin.php';
require_once '../use/head.php';
?>
<br>
<br>
<br>
<form action="process_insert.php">
	Tên
	<input type="text" name="ten">
	<br>
	SDT
	<input type="text" name="sdt">
	<br>
	Email
	<input type="email" name="email">
	<br>
	Mật khẩu
	<input type="password" name="mat_khau">
	<br>
	Cấp độ
	<input type="radio" name="cap_do" value="0" checked>Admin
	<input type="radio" name="cap_do" value="1">Super Admin
	<br>
	<button>Thêm</button>
</form>
<?php require_once '../use/foot.php'; ?>