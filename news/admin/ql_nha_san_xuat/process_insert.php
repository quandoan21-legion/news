<?php 
require_once '../use/check_admin.php';

$ten      = $_GET['ten'];

require_once '../../use/connect.php';
$sql = "insert into nha_san_xuat(ten)
values ('$ten')
";
mysqli_query($connect,$sql);


require_once '../../use/disconnect.php';