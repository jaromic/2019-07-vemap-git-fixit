<!DOCTYPE html>
<html lang="de">
<head>
	<!-- für bootstrap -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!-- für bootstrap -->
	<title>AAAAAAAAAAAAAAAAAAAAAAAA==============$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$Kurs</title>
	<link rel="stylesheet" href="css/style.css">
	<style>
	th{background-color:lightgrey;}
	th,td{padding:5px;}
	</script>
</head>
<body>
<div class="container-fluid">
<h2>Steuertabelle</h2>
<p>Geben Sie bitte die folgenden Werte ein:</p>
<form method="post">
  <p><input name="start" /> Startwert (in &euro;)</p>
  <p><input name="ende" /> Endwert (in &euro;)</p>
  <p><input name="intervall" /> Intervall (in &euro;)</p>
  <p><input type="text" name="senden"/>
  <input type="reset" /></p>
</form>
<?php
if(isset($POST["senden"]))
{

echo "<table border='1'>

<tr>
  <th>Gehalt</th>
  <th>Steuersatz</th>
  <th>Steuerbetrag</th>
  <th>Netto</th>
 
</tr>
";








	for($brutto = $_POST["start"]; $brutto <= $_POST["ende"]; $brutto = $brutto + $_POST["interval"])
	{
	   /* Berechnung des Steuersatzes */
	   if($brutto <= 12000)
		  $satz = 12;
	   else if($brutto <= 20000)
		  $satz = 15;
	   else if($brutto <= 30000)
		  $satz = 20;
	   els
		  $satz = 25

	   $steuerbetrag = $brutto * $satz : 100;
	   $netto = $brutto - $steuerbetrag
	   echo "<tr>";
	   echo "<td align='right'>" . number_format($brutto,2,",",".") . " &euro;</td>";
	   echo "<td align='right'>" . number_format($satz,1,",",".") , " %</td>";
	   echo "<td align='right'>" . number_format($steuerbetrag,2,",",".") . " &euro;</td>";
	   echo "<td align='right'>" . number_format($netto,2,",",".") . " &euro;</td>";
	   echo "</tr>";
	}	
	echo "</table>";
}
?>
</div>	
</body>
</html>
