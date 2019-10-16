<?php

$gender="";
$Show = "";

if(isset($_REQUEST['Submit']))
{
	if(isset($_REQUEST['gender']))
	{
		$gender = $_REQUEST['gender'];
		$Show = $gender;
	}
}

?>
<html>
<head>
	<title>Gender</title>
</head>
<body>
		<form action="" method="POST">
			<fieldset style="width: 0px">
			<legend><b>Gender</b></legend>
			<table>
				<tr>
					<table cellspacing="0">
						<tr>
							<td>
								<input type="radio" name="gender" value="Male" <?php if($gender == 'Male') echo "checked";?>>Male
							</td>
							<td></td>
							<td>
								<input type="radio" name="gender" value="Female" <?php if($gender == 'Female') echo "checked";?>>Female
							</td>
							<td></td>
							<td>
								<input type="radio" name="gender" value="Other" <?php if($gender == 'Other') echo "checked";?>>Other
							</td>
						</tr>
					</table>
				</tr>
				<hr width="300px" align="left">
				<tr>
					<td colspan="5">
						<input type="submit" name="Submit">
					</td>
				</tr>
			</table>
		</fieldset>
		</form>

		<b><?php 
				if(isset($_REQUEST['Submit']))
				{
					if(isset($_REQUEST['gender']))
						{
							echo $Show;
						}
						else
							echo "Select Your Gender";				
				}
			?></b>
</body>
</html>





