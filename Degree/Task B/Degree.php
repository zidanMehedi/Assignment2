<?php
	
	$degree[]="";

	if (isset($_REQUEST['Submit'])) 
	{
		$degree = $_REQUEST['option'];
	}
?>


<html>
<head>
	<title>Degree</title>
</head>
<body>
		<form action="" method="POST">
			<fieldset style="width: 0px">
			<legend><b>Degree</b></legend>
			<table>
				<tr>
					<table cellspacing="0">
						<tr>
							<td>
								<input type="checkbox" name="option[]" value="SSC">SSC
							</td>
							<td></td>
							<td>
								<input type="checkbox" name="option[]" value="HSC">HSC
							</td>
							<td></td>
							<td>
								<input type="checkbox" name="option[]" value="BSc">BSc
							</td>
							<td></td>
							<td>
								<input type="checkbox" name="option[]" value="MSc">MSc
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
			for ($i=0; $i < count($degree); $i++) 
					echo "<br>".$degree[$i];
			?></b>
</body>
</html>