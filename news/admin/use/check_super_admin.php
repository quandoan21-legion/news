<?php 

session_start();
if(empty($_SESSION['ma']) && $_SESSION['cap_do']!=1){
	header('location:../index.php');
}