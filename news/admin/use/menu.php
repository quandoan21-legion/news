<!-- tham khảo trên codepen.io -->
<style type="text/css">
#primary_nav_wrap
{
  margin-top:15px
}

#primary_nav_wrap ul
{
  list-style:none;
  position:relative;
  float:left;
  margin:0;
  padding:0
}

#primary_nav_wrap ul a
{
  display:block;
  color:#333;
  text-decoration:none;
  font-weight:700;
  font-size:12px;
  line-height:32px;
  padding:0 15px;
  font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif
}

#primary_nav_wrap ul li
{
  position:relative;
  float:left;
  margin:0;
  padding:0
}

#primary_nav_wrap ul li.current-menu-item
{
  background:#ddd
}

#primary_nav_wrap ul li:hover
{
  background:#f6f6f6
}

#primary_nav_wrap ul ul
{
  display:none;
  position:absolute;
  top:100%;
  left:0;
  background:#fff;
  padding:0
}

#primary_nav_wrap ul ul li
{
  float:none;
  width:200px
}

#primary_nav_wrap ul ul a
{
  line-height:120%;
  padding:10px 15px
}

#primary_nav_wrap ul ul ul
{
  top:0;
  left:100%
}

#primary_nav_wrap ul li:hover > ul
{
  display:block
}
</style>
<nav id="primary_nav_wrap">
<ul>
  <li class="current-menu-item"><a href="../../index.php">Home</a></li>
  <?php if($_SESSION['cap_do']==1){ ?>
  <li><a href="#">Quản lý admin</a>
    <ul>
      <li><a href="../ql_admin/index.php">Xem tất cả</a></li>
      <li><a href="../ql_admin/view_insert.php">Thêm mới</a></li>
    </ul>
  </li>
  <?php } ?>
  <li><a href="#">Quản lý nhà sản xuất</a>
    <ul>
      <li><a href="../ql_nha_san_xuat/index.php">Xem tất cả</a></li>
      <li><a href="../ql_nha_san_xuat/view_insert.php">Thêm mới</a></li>
    </ul>
  </li>
  <li><a href="#">Quản lý sản phẩm</a>
    <ul>
      <li><a href="../ql_san_pham/index.php">Xem tất cả</a></li>
      <li><a href="../ql_san_pham/view_insert.php">Thêm mới</a></li>
    </ul>
  </li>
  <li><a href="#"><?php echo $_SESSION['ten'] ?></a></li>
  <li><a href="../use/logout.php">Đăng xuất</a></li>
</ul>
</nav>