<!DOCTYPE html>
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
						<input type="text" name="name" value = 
							"<?php
								if(isset($_REQUEST['name']))
									{
										if($_REQUEST['name'] != "")
											{
												echo $_REQUEST['name'];
											}
										else
											echo "";
									}
							?>"
						>
						<br>
						<hr width="250px" align="left">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="Submit">
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
					if(isset($_REQUEST['name']))
						{
							if($_REQUEST['name'] == "")
								{
									echo "Null Value";
								}
							else
								{
									echo $_REQUEST['name'];
								}
						}
				?>
			</strong>
		</font>

</body>
</html>




