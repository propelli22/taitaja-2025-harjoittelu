<?php
header("Content-Type: application/xml; charset=utf-8");

$xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><saa></saa>');

$palvelin = "localhost";
$kayttaja = "root";
$salasana = "";
$tietokanta = "uutissivusto2";

$yhteys = new mysqli($palvelin, $kayttaja, $salasana, $tietokanta);

if ($yhteys->connect_error) {
    die("Yhteyden muodostaminen epäonnistui: " . $yhteys->connect_error);
}

$yhteys->set_charset("utf8");

$vko = $_GET["vko"];

$sql = "SELECT * FROM saa WHERE vko = $vko";

$tulokset = $yhteys->query($sql);

if($tulokset->num_rows > 0) {
    while($rivi = $tulokset->fetch_assoc()) {
        $pvmsaa = $xml->addChild('saa2');
        $pvmsaa->addChild('pvm', $rivi["paiva"]);
        $pvmsaa->addChild('lampotila', $rivi["lampotila"]);
        $pvmsaa->addChild('saa', $rivi["saatila"]);
        $pvmsaa->addChild('tuuli', $rivi["tuulennopeus"]);
    }
}

$xml->asXML("saa.xml");

$yhteys->close();
?>