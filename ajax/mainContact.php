<?php
	$about = $_POST['about'];
	$menssage = $_POST['menssage'];
	$to = 'lopezchr@gmail.com';
	$header= 'From: '.$_POST['from']; 
	$result= mail($to,$about,$menssage,$header);
	if($result){
		echo "00";
	}else{
		echo "01";
	}
?>
