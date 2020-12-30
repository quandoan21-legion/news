<?php 
require_once '../use/check_admin.php';

$ma       = $_GET['ma'];

require_once '../../use/connect.php';
$sql = "delete from nha_san_xuat
where ma = '$ma'
";
mysqli_query($connect,$sql);


require_once '../../use/disconnect.php';