<?php 
require_once '../use/check_super_admin.php';

$ten      = $_GET['ten'];
$email    = $_GET['email'];
$sdt      = $_GET['sdt'];
$mat_khau = $_GET['mat_khau'];
$cap_do   = $_GET['cap_do'];

require_once '../../use/connect.php';
$sql = "insert into admin(ten,sdt,email,mat_khau,cap_do)
values ('$ten','$sdt','$email','$mat_khau','$cap_do')
";
mysqli_query($connect,$sql);


require_once '../../use/disconnect.php';