<?php

	$CheckDay = "";
	$CheckMonth = "";
	$CheckYear = "";
	$Show = "";

	if(isset($_REQUEST['Submit']))
	{
		$Day = $_REQUEST['day'];
		$Month = $_REQUEST['month'];
		$Year = $_REQUEST['year'];

		if ($Day == "" || $Month == "" || $Year == ""){
			$CheckDay = "";
			$CheckMonth = "";
			$CheckYear = "";
			$Show = "Please Enter Necessary Informations";
		}
		else
		{
			if(!preg_match("/^[0-9]*$/",$Day) || !preg_match("/^[0-9]*$/",$Month) || !preg_match("/^[0-9]*$/",$Year)) {
				$CheckDay = "";
				$CheckMonth = "";
				$CheckYear = "";
				$Show = "Please Enter Correctly";
			}
			else
			{
				$intDay = $Day + 0;
				$intMonth = $Month + 0;

				if(($intDay<=0 || $intDay>31) || ($intMonth<=0 || $intMonth>12))
				{
					$CheckDay = "";
					$CheckMonth = "";
					$CheckYear = "";
					$Show = "Invalid Date";
				}
				else{
						$CheckDay = $Day;
						$CheckMonth = $Month;
						$CheckYear = $Year;
						if(strlen($CheckDay) == 1)
						{
							if (strlen($CheckMonth) == 1) {
								$Show = "0".$CheckDay."/"."0".$CheckMonth."/".$CheckYear;
							}
							else
								$Show = "0".$CheckDay."/".$CheckMonth."/".$CheckYear;
						}
						elseif(strlen($CheckMonth) == 1)
						{
							if (strlen($CheckDay) == 1) {
								$Show = "0".$CheckDay."/"."0".$CheckMonth."/".$CheckYear;
							}
							else
								$Show = $CheckDay."/"."0".$CheckMonth."/".$CheckYear;
						
						}
						else
							$Show = $CheckDay."/".$CheckMonth."/".$CheckYear;
				}
			}
			
		}
	}

	echo $Show;
?>