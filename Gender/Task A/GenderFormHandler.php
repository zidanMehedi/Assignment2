<?php

$gender="";
$show = "";

if(isset($_REQUEST['Submit']))
{
		
			$gender = $_REQUEST['gender'];
			$show = $gender;
}

if(isset($_REQUEST['Submit']))
				{
					if($gender != "")
						{
							echo $show;
						}
					else
						echo "Please Select One";
				}

?>