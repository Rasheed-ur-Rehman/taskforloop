<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
	<input type="number" name="table">
	<input type="submit" name="print" value="table_num">

</form>

	<?php 
		$num=$_POST['table'];
	for ($i=1;$i<=10;$i++){
		echo "The GIVEN table is  $num * $i =".$num*$i."<br/>";
	}


	 ?>

</body>
</html>