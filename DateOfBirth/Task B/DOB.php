<!DOCTYPE html>
<html>
<head>
	<title>Date Of Birth</title>
</head>
<body>
		<form action="" method="POST">
			<fieldset style="width: 0px">
			<legend><b>Date Of Birth</b></legend>
			<table>
				<tr>
					<table cellspacing="0">
						<tr >
							<td><center>dd</center></td>
							<td></td>
							<td><center>mm</center></td>
							<td></td>
							<td><center>yyyy</center></td>
						</tr>
						<tr>
							<td>
								<input pattern="[0-9]{2}" size="1px" type="number" name="day" min="1" max="31">
							</td>
							<td>&nbsp;/&nbsp;</td>
							<td>
								<input pattern="[0-9]{2}" min="1" max="12" size="1px" type="number" name="month" min="1" max="12">
							</td>
							<td>&nbsp;/&nbsp;</td>
							<td>
								<input pattern="[0-9]{4}" size="5px" type="text" name="year">
							</td>
						</tr>
					</table>
				</tr>
				<hr width="300px" align="left">
				<tr>
					<td colspan="5">
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
					if(isset($_REQUEST['day']) && isset ($_REQUEST['month']) && isset($_REQUEST['year']))
						{
							if($_REQUEST['day'] == "" || $_REQUEST['month'] == "" || $_REQUEST['year'] == "")
								{
									echo "Please Insert Necessary Informations";
								}
							else
								{
									echo $_REQUEST['day']."/".$_REQUEST['month']."/".$_REQUEST['year'];
								}
						}
				?>
			</strong>
		</font>

</body>
</html>




