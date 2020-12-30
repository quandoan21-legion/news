<?php 
require_once 'head.php';
require_once 'use/connect.php';

$tim_kiem = "";
if(isset($_GET['tim_kiem'])){
	$tim_kiem = $_GET['tim_kiem'];
}

//lấy số sản phẩm theo tìm kiếm
$sql = "select * from san_pham where ten like '%$tim_kiem%'";
$array = mysqli_query($connect,$sql);
$so_san_pham = mysqli_num_rows($array);

$so_san_pham_tren_1_trang = 1;
$so_trang = ceil($so_san_pham/$so_san_pham_tren_1_trang);

$trang_hien_tai = 1;
if(isset($_GET['trang'])){
	$trang_hien_tai = $_GET['trang'];
}

$bo_qua = ($trang_hien_tai - 1) * $so_san_pham_tren_1_trang;

$sql = "$sql limit $so_san_pham_tren_1_trang offset $bo_qua";
$array = mysqli_query($connect,$sql);
// die($sql);
?>
<br>
<br>
<br>
<form>
  Tìm kiếm: 
  <input type="search" name="tim_kiem" value="<?php echo $tim_kiem ?>">
</form>
<?php foreach ($array as $san_pham): ?>
	<div class="tung_san_pham">
		<div style="height: 300px; background: url('use/anh/<?php echo $san_pham['anh'] ?>') center; width: 100%; background-size: cover">
		</div>
		<h1><?php echo $san_pham['ten'] ?></h1>
		<h3>Giá: <?php echo $san_pham['gia'] ?>$</h3>
		<p>
			Mô tả: <?php echo $san_pham['mo_ta'] ?> 
			<a href="view_chi_tiet.php?ma=<?php echo $san_pham['ma'] ?>">
				Xem thêm
			</a>
		</p>
	</div>
<?php endforeach ?>
<div align="center" style="clear: both">
	<?php for($i=1;$i<=$so_trang;$i++){ ?>
		<a href="?trang=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem ?>">
			<?php echo $i ?>
		</a>
	<?php } ?>
</div>

<?php require_once 'foot.php'; ?>