<?php

$gender="";
$show = "";

if(isset($_REQUEST['Submit']))
{
		
			$gender = $_REQUEST['gender'];
			$show = $gender;
		
	
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
					if($gender != "")
						{
							echo $show;
						}
					else
						echo "Please Select One";
				}
			?></b>
</body>
</html>





