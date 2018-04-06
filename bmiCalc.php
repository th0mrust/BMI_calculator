<?php

	$gewicht = $_REQUEST["gewicht"];
	$lengte = $_REQUEST["lengte"];

	$lengte = $lengte / 100;

	$bmi = $gewicht / ($lengte * 2);
	$bmi = round($bmi,1);
	echo "uw gewicht is: $gewicht. <br> uw lengte is: $lengte. <br> uw BMI is: $bmi. <br>";
	switch ($bmi){
		case($bmi<18.5):
			echo "u heeft ondergewicht!";
			break;
		case(($bmi>18.5)&&($bmi<=25)):
			echo "u bent normaal/gezond";
			break;
		case(($bmi>25)&&($bmi<=27)):
			echo "u heeft licht overgewicht";
			break;
		case(($bmi>27)&&($bmi<=30)):
			echo "u heeft matig overgewicht";
			break;
        case(($bmi>30)&&($bmi<=40)):
            echo "u heeft obesitas";
            break;
        case($bmi>40):
            echo "u bent zo dik dat er 2 biervaten in je buik passen!";
            break;
	}



?>
