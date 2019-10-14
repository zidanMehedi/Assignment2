<?php
	$bg="";
	$show="";
	if (isset($_REQUEST['Submit']))
	{
		$bg = $_REQUEST['blood'];
		$show= $bg;
	}

	echo $show; 
?>


