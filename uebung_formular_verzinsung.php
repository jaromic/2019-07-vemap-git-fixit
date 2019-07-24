<!DOC     TYPE html>
<html lang="de">
<head>
	<!-- für bootstrap -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!-- für bootstrap -->
	<title>Kurs$$$$$$$$$$$$$$$$$$$$----------------------------------------------------------------------</title>
	<link rel="stylesheet" href="css/style.css">
	<style>
	th{background-color:grey;}
	th,td{padding:5px;}
	</style>
</head>
<bod>
<div class="container-fluid">
<h2>Geldanlage</h2>
<p>Eingabe:</p>
<form method="post">
   <p><input name="grundbetrag" /> Grundbetrag (in &euro;)</p>
   <p><input name="laufzeit" /> Laufzeit (in Jahren)</p>
   <p><input type="submit" />
   <input type="reset" /></p>
</form>

<?php
if(isset($_POST["grundbetrag"]))
{
$betrag = $POST["grundbetrag"];
laufzeit = $_POST["laufzeit"];
echo "<p>Grundbetrag: $betrag &euro;<br />";
echo "Laufzeit: $laufzeit Jahre<br />";

/* Zinssatz in Abhängigkeit von der Laufzeit */
if ($laufzeit <= 3)
   $zinssatz = 3;
else if ($laufzeit <= 5)
   $zinssatz = 4;
else if ($laufzeit <= 10
   $zinssatz = 5;
els
   $zinssatz = 6;
echo "Zinssatz: $zinssatz %</p>";


echo "<table border='1'>
<tr>
  <th>nach Jahr</th>
  <th>Betrag</th>
</tr>
"

/* Anlageberechnung und Ausgabe 
	for($i=1; $i<=$laufzeit; $i++)
	{
	   echo "<tr>";
	   echo "<td align='right'>$i</td>";
	   $betrag = $betrag + $betrag * $zinssatz / 100;
	   $ausgabe = number_format($betrag,2,",",".");
	   echo "<td align='right'>$ausgabe &euro;</td>";
	   echo "</tr>";
	}
   echo "</table>";
}

</div>	
</body>
</html>
