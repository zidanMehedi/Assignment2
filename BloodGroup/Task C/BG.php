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
					<option value=""   <?php if($bg==''){echo "selected";} ?>></option>
					<option value="A+" <?php if($bg=='A+'){echo "selected";} ?>>A+</option>
					<option value="A-" <?php if($bg=='A-'){echo "selected";} ?>>A-</option>
					<option value="B+" <?php if($bg=='B+'){echo "selected";} ?>>B+</option>
					<option value="B-" <?php if($bg=='B-'){echo "selected";} ?>>B-</option>
					<option value="O+" <?php if($bg=='AB+'){echo "selected";} ?>>AB+</option>
					<option value="O-" <?php if($bg=='AB-'){echo "selected";} ?>>AB-</option>
					<option value="AB+" <?php if($bg=='O+'){echo "selected";} ?>>O+</option>
					<option value="AB-" <?php if($bg=='O-'){echo "selected";} ?>>O-</option>
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
