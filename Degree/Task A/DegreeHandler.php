<?php
	
	$degree[]="";

	if (isset($_REQUEST['Submit'])) 
	{
		if(isset($_REQUEST['option']))
		{
			$degree = $_REQUEST['option'];
			for ($i=0; $i < count($degree); $i++) 
							echo "<br>".$degree[$i];
		}
		else
			echo "Please Select One";
	}
?>