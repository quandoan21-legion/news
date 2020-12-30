<?php 
require_once '../use/check_admin.php';

$ten             = $_POST['ten'];
$gia             = $_POST['gia'];
$file_anh        = $_FILES['anh'];
$mo_ta           = $_POST['mo_ta'];
$ma_nha_san_xuat = $_POST['ma_nha_san_xuat'];


$_FILES["fileToUpload"] = $file_anh;
$ten_anh = $file_anh['name'];
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


require_once '../../use/connect.php';
$sql = "insert into san_pham(ten,anh,gia,mo_ta,ma_nha_san_xuat)
values('$ten','$ten_anh','$gia','$mo_ta','$ma_nha_san_xuat')
";
// die($sql);
mysqli_query($connect,$sql);


require_once '../../use/disconnect.php';