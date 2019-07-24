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
	<title>Kurs</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid">
<h2>Pizza Bestellung</h2>
<form  method = "post">
   <p><input name="bst" /> Name</p>
   <p><input name="adr" /> Adresse</p>
   <p>
   <input type="radio" name="anr" value="Herr" > Herr <br />
   <input type="radio" name="anr" value="Frau" > Frau</p>
   <p>
   <select name="uhrzeit">
   <?php
   
   for ($stunde = 8; $stunde < 20; $stunde++) {
	   
		
	  for ($minuten = 0; $minuten < 60; $minuten+=15) { 


		$anzeigeStunden=str_pad($stunde,2,0,STR_PAD_LEFT);
		$anzeigeMinuten=str_pad($minuten,2,0,STR_PAD_LEFT);
	  
		echo "<option>$anzeigeStunden : $anzeigeMinuten</option>\n";  
	  }  
	 
	} 
   ?>
   </select> Uhrzeit<p>
   
   
   
   
   <p><select name="ptyp">
      <option value="Napoli" selected="selected">Napoli (5,70 &euro;)</option>
      <option value="Italia">Italia (6,30 &euro;)</option>
      <option value="Con Tutto">Con Tutto (7,10 &euro;)</option>
      <option value="4 Stagioni">4 Stagioni (6,60 &euro;)</option>
      <option value="Mozzarella">Mozzarella (7,80 &euro;)</option>
   </select></p>
   <p>
   <input type="checkbox" name="cth" value="Extra Knoblauch" /> Extra Knoblauch (Aufpreis 0,60 &euro;)<br />
   <input type="checkbox" name="cek" value="Extra Käse" /> Extra Käse (Aufpreis 1,10 &euro;)</p>
   <p><input type = "submit" name="senden" />
   <input type = "reset" /></p>
</form>
<?php
if(isset($_POST["senden"]))
{
	
	/* Auswahl der Pizza */
   if ($_POST["ptyp"] == "Napoli")
      $preis = 5.7;
   else if ($_POST["ptyp"] == "Italia")
      $preis = 6.3;
   else if ($_POST["ptyp"] == "Con Tutto")
      $preis = 7.1;
   else if ($_POST["ptyp"] == "4 Stagioni")
      $preis = 6.6;
   else
      $preis = 7.8;

   /* Anrede */
   if ($_POST["anr"] == "Herr")
      echo "<p>Sehr geehrter Herr " . $_POST["bst"] . "<br />";
   else
      echo "<p>Sehr geehrte Frau " . $_POST["bst"] . "<br />";

   /* Ausgabe */
   echo "Vielen Dank für Ihre Bestellung</p>";
   echo "<p>Wir liefern Ihre Pizza " . $_POST["ptyp"];

   /* Zusätze */
   if (isset($_POST["cth"]))
   {
      echo " mit " . $_POST["cth"];
      $preis = $preis + 0.6;
   }
   if (isset($_POST["cek"]))
   {
      echo " mit " . $_POST["cek"];
      $preis = $preis + 1.1;
   }

   echo "<br />um ".$_POST["uhrzeit"]." an die folgende Adresse:<br />";
   echo $_POST["adr"] . "</p>";
   echo "<p>Der Preis beträgt $preis &euro;</p>";
   echo "<p>Ihr Pizza-Team</p>";
}




?>
</div>	
</body>
</html>