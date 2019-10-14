<?php
	if(isset($_REQUEST['email']))
		{
			if($_REQUEST['email'] == "")
				{
					echo "Null Value";
				}
			else
				{
					echo $_REQUEST['email'];
				}
		}
?>