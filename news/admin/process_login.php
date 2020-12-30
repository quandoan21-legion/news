<?php 

$email = $_GET['email'];
$mat_khau = $_GET['mat_khau'];

require_once '../use/connect.php';

$sql = "select * from admin where email = '$email' and mat_khau = '$mat_khau'";
$array_admin = mysqli_query($connect,$sql);

//đếm xem có admin nào tương ứng với thông tin đã điền
$dem = mysqli_num_rows($array_admin);

require_once '../use/disconnect.php';
if($dem==1){
	// đăng nhập thành công
	echo "thanh cong";
	session_start();
	$each = mysqli_fetch_array($array_admin);
	$_SESSION['ma']     = $each['ma'];
	$_SESSION['ten']    = $each['ten'];
	$_SESSION['cap_do'] = $each['cap_do'];
	// header thành công
	header('location:loged_in/index.php');
}
else{
	// đăng nhập thất bại
	echo "NGU NHƯ DUY LONG  ML ";
}