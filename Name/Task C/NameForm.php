<?php

	$Check = "";
	$Show = "";

	if(isset($_REQUEST['Submit']))
	{
		$Name = $_REQUEST['name'];

		if ($Name == ""){
			$Check = $Name;
			$Show = "Please Enter Your Name";
		}
		elseif (!preg_match("/^[a-zA-Z ]*$/",$Name)) // Checks if there is any invalid charcters excluding letters and spaces
		{
			$Check = "";
			$Show = "Enter A Valid Name";
		}
		else{
			$Check = $Name;
			$Show = $Name;
		}
	}
?>

<html>
<head>
	<title>Name</title>
</head>
<body>
		<form action="" method="POST">
			<fieldset style="width: 258px">
			<legend><b>Name</b></legend>
			<table>
				<tr>
					<td>
						<input type="text" name="name" value = "<?= $Check ?>">
						<br>
						<hr width="250px" align="left">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="Submit" value="Submit">
					</td>
				</tr>
			</table>
		</fieldset>
		</form>
		<br>
		<br>
		&ensp;
		&nbsp;
		<font size="5px">
			<strong>
				<?= $Show ?>
			</strong>
		</font>

</body>
</html>




