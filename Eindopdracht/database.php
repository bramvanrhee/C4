<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "c4");

$result = $conn->query("SELECT Voornaam, Achternaam, Straat, Huisnummer, Postcode, Woonplaats, Telefoonnummer, TijdToegevoegd FROM personen");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"Voornaam":"'  . $rs["Voornaam"] . '",';
  $outp .= '"Achternaam":"'   . $rs["Achternaam"]        . '",';
  $outp .= '"Straat":"'. $rs["Straat"]     . '",';
  $outp .= '"Huisnummer":"'. $rs["Huisnummer"]     . '",';
  $outp .= '"Postcode":"'. $rs["Postcode"]     . '",';
  $outp .= '"Woonplaats":"'. $rs["Woonplaats"]     . '",';
  $outp .= '"Telefoonnummer":"'. $rs["Telefoonnummer"]     . '",';
  $outp .= '"Straat":"'. $rs["TijdToegevoegd"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
