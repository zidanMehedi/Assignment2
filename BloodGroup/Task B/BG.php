<?php
	$bg="";
	$show="";
	if (isset($_REQUEST['Submit']))
	{
		$bg = $_REQUEST['blood'];
		$show= $bg;
	}
?>



<html>
<head>
	<title>Blood Group</title>
</head>
<body>

<fieldset style="width:0px">
	<legend><strong>Blood Group<strong></legend>
	<form  action="" method="POST">
	<table>
		<tr>
			<td>
				<select name="blood">
					<option value=""></option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">AB+</option>
					<option value="O-">AB-</option>
					<option value="AB+">O+</option>
					<option value="AB-"O-</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<hr width="200px" align="left">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="Submit">
			</td>
		</tr>
	</table>
	</form>
</fieldset>

<b><?php echo $show; ?></b>

</body>
</html>