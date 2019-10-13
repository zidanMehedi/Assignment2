<!DOCTYPE html>
<html>
<head>
	<title>Name</title>
</head>
<body>
		<form action="form.php" method="POST">
			<fieldset>
			<legend><b>Name</b></legend>
			<table>
				<tr>
					<td>
						<input type="text" name="name" value = "<?php
							if(isset($_REQUEST['name']))
								{
									if($_REQUEST['name'] != "")
										{
											echo $_REQUEST['name'];
										}
								}
							?>"><br>
						<hr>
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


</body>
</html>

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