<?php 

session_start();
if(empty($_SESSION['ma'])){
	header('location:../index.php');
}