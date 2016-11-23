<html>
<head>
<title>UTS_UPGRADE_1521024136_ABDUL_ROZAK</title>
</head>
	<body>
	<table border='1'>
	<tr>
		<th rowspan="2">INPUT</th>
		<th rowspan="5">OUTPUT</th>
	</tr>
<tr>
	<th>A</th>
	<th>I</th>
	<th>U</th>
	<th>E</th>
	<th>O</th>
</tr>
<tr>
	<td>
		<?php
		$input="ABDUL ROZAK ROMADHONI";
		echo $input;
		?>
	</td>
	<td>
		<?php
		$a = substr_count($input,"A");
		echo $a
		?>
   </td>
	<td>
		<?php
		$i = substr_count($input,"I");
		echo $i
		?>
	<td>
		<?php
		$u = substr_count($input,"U");
		echo $u
		?>
	</td>
	<td>
		<?php
		$e = substr_count($input,"E");
		echo $e
		?>
	</td>
	<td>
		<?php
		$o = substr_count($input,"O");
		echo $o
		?>
</td>
</tr>

</body>
</html>