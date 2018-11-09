<?php
session_start();
	$tmp_name = $_FILES["picture"]["tmp_name"];
	$uploadfilename = $_FILES["picture"]["name"];

	$newfilename = "../../uploads/".basename($uploadfilename);
	$_SESSION['prevfilename'] = basename($uploadfilename);
    $_SESSION['pubfilename'] = "uploads/".basename($uploadfilename);
	if (move_uploaded_file($tmp_name, $newfilename)) {
		echo "<p id='result'>File Uploaded</p>\n";
	} else{echo "<p id='result'>Upload Failed</p>\n";}

//var_dump($_POST);
?>