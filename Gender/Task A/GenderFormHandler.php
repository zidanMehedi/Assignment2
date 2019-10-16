<?php

$gender="";
$Show = "";

if(isset($_REQUEST['Submit']))
{
	if(isset($_REQUEST['gender']))
	{
		$gender = $_REQUEST['gender'];
		$Show = $gender;
		echo $Show;
	}
	else
		echo "Please Select Your Gender";
}

?>