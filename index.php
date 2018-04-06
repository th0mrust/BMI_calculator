<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
    <meta name="author" content="Thom Rustemeijer">
		<title>Ajax 2</title>
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>

	<body>
        <h1>BMI calculator van Thom</h1>
        <fieldset>
		<div id="main">
			<h3>gewicht (kg):</h3>&nbsp;<input type="number" id="gewicht" placeholder="voer hier je gewicht in"/>
			<h3>lengte (cm):</h3>&nbsp;<input type="number" id="lengte" placeholder="voer hier je lengte in"/>
			<button onclick="bmiCalc()">Calculate</button>
			<p><span id="bmiSpan"></span></p>
		</div>
    </fieldset>
<script src="ajax.js"></script>
	</body>
</html>
