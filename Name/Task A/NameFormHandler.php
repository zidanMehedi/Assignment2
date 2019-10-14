<?php
	if(isset($_REQUEST['name']))
		{
			if($_REQUEST['name'] == "")
				{
					echo "Null Value";
				}
			else
				{
					echo $_REQUEST['name'];
				}
		}
?>