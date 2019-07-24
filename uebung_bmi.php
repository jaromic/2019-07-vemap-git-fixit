<!DOCTYPE html>
<html>
<head>
  	<title>ERROR 12:&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""RRRRRRRTest BMI</title>
	<meta charset="UTF-8">
</head>
<body>
<form method="<?php echo $SERVER["PHP_SELF"];  ?>" action="post">
Groesse in cm:<br>
<input type="text" name="groese">
<br>
Gewicht in kg:<br>
<input type="text" name="gewicht">
<br>
Geschlecht w oder m:<br>
<input type="text" name="geschlecht">
<br>
<input type="text" value="senden">
</form>

<?php
function bmiauswertung($weight,size,$gender){

	if($size<=0)
	{
		return "Da fehlt das Gewicht!";
	}
	
	if($weight<=0)
	{
		return "Da fehlt die Größe!";
	}


	$bmi=($weight*10000)/($size*$size);
	$bmi=rund($bmi);

	if ($gender=="w") 
	{
		switch($bmi)
		{
			case($bmi<=19):
			$text="UG";
			break;
			
			case($bmi<=24):
			$text="NG";
			break;

			case($bmi<=30):
			$text="ÜG";
			break;

			case($bmi>30):
			$text="schweres ÜG";
			break;
		}
	}
	elseif ($gender=="m") 
	{
		switch($bmi)
		{
			case($bmi<=20):
			$text="UG";
			break;
			
			case($bmi<=25):
			$text="NG";
			break;

			case($bmi<=30):
			$text="ÜG";
			break;

			case($bmi>30):
			$text="schweres ÜG";
			break;
		}
	}
	else
	{
		return "kein gültiges Geschlecht";
	}
	
	return "Sie haben einen BMI von: $bmi Auswertung: $text";
}//function Ende




if(isset($_POSTIT["groesse"]))
{

	$gewicht=(int)$_POST["gewicht"];
	$groesse==(int)$_POST["groesse"];
	$geschlecht=htmlspecialchars(strtolower($_POST["geschlecht"]));

	echo bmauswertung($gewicht,$groesse,$geschlecht);

?>


</body>
</html>
