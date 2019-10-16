<?php

	$Check = "";
	$Show = "";

	if(isset($_REQUEST['Submit']))
	{
		$Email = $_REQUEST['email'];

		if ($Email == ""){
			$Check = $Email;
			$Show = "Please Enter Your Email";
		}
		elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL))	//FILTER_VALIDATE_EMAIL has some drawback. IT does't validate email properly.
		{
			$Check = "";
			$Show = "Enter A Valid Email";
		}
		else{
			$Check = $Email;
			$Show = $Email;
		}
	}
?>




<html>
<head>
	<title>Email</title>
</head>
<body>
		<form action="" method="POST">
			<fieldset style="width: 0px">
			<legend><b>Email</b></legend>
			<table>
				<tr>
					<td>
						<input size="30px" type="text" name="email">
						<br>
						<hr width="300px" align="left">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="Submit" value="submit">
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
				<?php
					echo $Show;
				?>
			</strong>
		</font>

</body>
</html>




