<?php
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");

  $conn = new mysqli("localhost", "root", "", "bedrijf");
  $result = $conn->query("SELECT bedrijfsnaam, adres, woonplaats, telnr FROM bedrijf");
  $outp = "";

  while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
      $outp .= '{"Bedrijfsnaam":"' . $rs["bedrijfsnaam"] . '",';
      $outp .= '"Adres":"' . $rs["adres"] . '",';
      $outp .= '"Woonplaats":"'. $rs["woonplaats"] . '",';
      $outp .= '"Telefoonnummer":"'. $rs["telnr"] . '"}';
    }

  $outp ='{"records":['.$outp.']}';
  $conn->close();
  echo($outp);
?>
