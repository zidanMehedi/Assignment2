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
		elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) //FILTER_VALIDATE_EMAIL has some drawback. IT does't validate email properly.
		{     
			$Check = "";
			$Show = "Enter A Valid Email";
		}
		else{
			$Check = $Email;
			$Show = $Email;
		}
	}

	echo $Show;
?>





