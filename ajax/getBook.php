<?
	$bookary=file("book.txt");
	$bookary=array_reverse($bookary);
	for($i=0;$i<10;$i++){
		$message=explode("@#",$bookary[$i]);
		

		?><table width="80%">
			<tr>
				<td><p><?=$message[1]?></p></td>
				<td align="right"><p><?=$message[0]?></p></td>	
			</tr>
			<tr style="background-color:#FBFAE9; padding:3px;">
				<td colspan="2" width="100%"><p><?=$message[2]?></p></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
		</table><?
	}

?>
