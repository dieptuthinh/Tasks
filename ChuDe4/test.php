<?php
	$fp= fopen("dulieu_bai4.txt",'a') or exit("khong tim thay file can mo");
	$news="Danh sach lop";
	fwrite($fp,$news);
	fclose($fp);
?>
