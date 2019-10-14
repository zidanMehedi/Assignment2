<!DOCTYPE html>
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
						<input size="30px" type="email" name="email" value = 
							"<?php
								if(isset($_REQUEST['email']))
									{
										if($_REQUEST['email'] != "")
											{
												echo $_REQUEST['email'];
											}
										else
											echo "";
									}
							?>"
						>
						<br>
						<hr width="300px" align="left">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" email="Submit">
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
					if(isset($_REQUEST['email']))
						{
							if($_REQUEST['email'] == "")
								{
									echo "Null Value";
								}
							else
								{
									echo $_REQUEST['email'];
								}
						}
				?>
			</strong>
		</font>

</body>
</html>




