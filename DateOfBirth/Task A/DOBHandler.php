<?php
					if(isset($_REQUEST['day']) && isset ($_REQUEST['month']) && isset($_REQUEST['year']))
						{
							if($_REQUEST['day'] == "" || $_REQUEST['month'] == "" || $_REQUEST['year'] == "")
								{
									echo "Please Insert Necessary Informations";
								}
							else
								{
									echo $_REQUEST['day']."/".$_REQUEST['month']."/".$_REQUEST['year'];
								}
						}
				?>