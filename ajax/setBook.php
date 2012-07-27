<?
	$mensaje=Date("d/m/Y H:i:s")."@#".$_POST['from']."@#".$_POST['texto'];
	$fo = fopen("book.txt", "a");
	fwrite($fo,$mensaje.PHP_EOL);
	fclose($fo);
?>
