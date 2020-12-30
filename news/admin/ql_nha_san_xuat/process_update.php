<?php 
require_once '../use/check_admin.php';

$ma       = $_GET['ma'];
$ten      = $_GET['ten'];

require_once '../../use/connect.php';
$sql = "update nha_san_xuat set
ten = '$ten'
where ma = '$ma'
";
mysqli_query($connect,$sql);


require_once '../../use/disconnect.php';