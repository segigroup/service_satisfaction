<?php

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
include "config.php";
require 'vendor/autoload.php';

$postjson = json_decode(file_get_contents('php://input'), true);
$today = date('Y-m-d H:i:s');
$month = date('M');
  
if(isset($_POST["btnSubmit"])) {
	$id = $_GET["myid"];
	echo $id;
	
    if (empty($errorMessage)) {
        
    }
	
	// $store_id = filter_var($_POST["store_id"], FILTER_SANITIZE_STRING);
	$noTel = filter_var($_POST["noTel"], FILTER_SANITIZE_STRING);
	$insert = mysqli_query($mysqli, "INSERT INTO tb_satisfaction SET
		-- left: name as in db, right name as in coding
		survey_date	= '$today',
		store_id	= '$id',
		baik		= 1,
		hp_no		= '$noTel'
	");                 
	
	if($insert){
		// $result = json_encode(array('success' =>true, 'msg'=>'Respons anda telah direkodkan.'));
		echo "<script>alert('Respons anda telah direkodkan.');</script>";
		header('location: successpage.php');
	}else{
		// $result = json_encode(array('success' =>false, 'msg'=>'Respons anda gagal direkodkan. Sila cuba sebentar lagi.'));
		echo "<script>alert('Respons anda gagal direkodkan. Sila cuba sebentar lagi.');</script>";
		header('location: satisfied.php');
	}
    // echo $result;
    
}elseif(isset($_POST["btnSubmitneg"])) {
	$id = $_GET["myid"];
	echo $id;
	
    if (empty($errorMessage)) {
        
    }
	
	// $store_id = filter_var($_POST["store_id"], FILTER_SANITIZE_STRING);
	$noTel = filter_var($_POST["noTel"], FILTER_SANITIZE_STRING);
	$insert = mysqli_query($mysqli, "INSERT INTO tb_satisfaction SET
		-- left: name as in db, right name as in coding
		survey_date	= '$today',
		store_id	= '$id',
		tidak_baik	= 1,
		hp_no		= '$noTel'
	");                 
	
	if($insert){
		// $result = json_encode(array('success' =>true, 'msg'=>'Respons anda telah direkodkan.'));
		echo "<script>alert('Respons anda telah direkodkan.');</script>";
		header('location: successpage.php');
	}else{
		// $result = json_encode(array('success' =>false, 'msg'=>'Respons anda gagal direkodkan. Sila cuba sebentar lagi.'));
		echo "<script>alert('Respons anda gagal direkodkan. Sila cuba sebentar lagi.');</script>";
		header('location: notsatisfied.php');
	}
    // echo $result;
}
?>