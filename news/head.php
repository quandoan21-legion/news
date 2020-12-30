<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="banner">
	
</div>
<div id="menu">
<nav id="primary_nav_wrap">
<ul>
  <li class="current-menu-item"><a href="#">Home</a></li>
  <li><a href="#">Menu 1</a>
    <ul>
      <li><a href="#">Sub Menu 1</a></li>
      <li><a href="#">Sub Menu 2</a></li>
    </ul>
  </li>
<nav id="primary_nav_wrap">
<ul>
  <li class="current-menu-item"><a href="../../index.php">Home</a></li>
  <?php if($_SESSION['cap_do']==1){ ?>
  <li><a href="#">Qu?n lý admin</a>
    <ul>
      <li><a href="../ql_admin/index.php">Xem t?t c?</a></li>
      <li><a href="../ql_admin/view_insert.php">Thêm m?i</a></li>
    </ul>
  </li>
  <?php } ?>
  <li><a href="#">Qu?n lý nhà s?n xu?t</a>
    <ul>
      <li><a href="../ql_nha_san_xuat/index.php">Xem t?t c?</a></li>
      <li><a href="../ql_nha_san_xuat/view_insert.php">Thêm m?i</a></li>
    </ul>
  </li>
  <li><a href="#">Qu?n lý s?n ph?m</a>
    <ul>
      <li><a href="../ql_san_pham/index.php">Xem t?t c?</a></li>
      <li><a href="../ql_san_pham/view_insert.php">Thêm m?i</a></li>
    </ul>
  </li>
  <li><a href="#"><?php echo $_SESSION['ten'] ?></a></li>
  <li><a href="../use/logout.php">Ðang xu?t</a></li>
</ul>
</nav>
  
</ul>
</nav>	
</div>