<?php 
require_once '../use/check_super_admin.php';

$ma       = $_GET['ma'];
$ten      = $_GET['ten'];
$email    = $_GET['email'];
$sdt      = $_GET['sdt'];
$mat_khau = $_GET['mat_khau'];
$cap_do   = $_GET['cap_do'];

require_once '../../use/connect.php';
$sql = "update admin set
ten = '$ten',
email = '$email',
sdt = '$sdt',
mat_khau = '$mat_khau',
cap_do = '$cap_do'
where ma = '$ma'
";
mysqli_query($connect,$sql);


require_once '../../use/disconnect.php';