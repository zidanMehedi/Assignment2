<?php 

$degree[]="";

	if (isset($_REQUEST['Submit'])) 
	{
		$degree = $_REQUEST['option'];
	}
			

			for ($i=0; $i < count($degree); $i++) 
					echo "<br>".$degree[$i];
?>