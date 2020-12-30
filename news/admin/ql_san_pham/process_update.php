<?php 
require_once '../use/check_admin.php';

$ma              = $_POST['ma'];
$ten             = $_POST['ten'];
$gia             = $_POST['gia'];
$anh_cu          = $_POST['anh_cu'];
$anh_moi         = $_FILES['anh_moi'];
$mo_ta           = $_POST['mo_ta'];
$ma_nha_san_xuat = $_POST['ma_nha_san_xuat'];

// Trường hợp: có chọn ảnh mới
if(!empty($anh_moi['name'])){
	$ten_anh = $anh_moi['name'];
	$_FILES["fileToUpload"] = $anh_moi;
	//chọn thư mục chứa ảnh
	$target_dir = "../../use/anh/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        // echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        // echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    // echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    // echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    // echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	    } else {
	        // echo "Sorry, there was an error uploading your file.";
	    }
	}
}
else{
	$ten_anh = $anh_cu;
}

require_once '../../use/connect.php';
$sql = "update san_pham set
ten = '$ten',
gia = '$gia',
anh = '$ten_anh',
mo_ta = '$mo_ta',
ma_nha_san_xuat = '$ma_nha_san_xuat'
where ma = '$ma'
";
mysqli_query($connect,$sql);


require_once '../../use/disconnect.php';