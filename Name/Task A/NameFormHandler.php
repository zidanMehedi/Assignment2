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

	echo $Show;
?>