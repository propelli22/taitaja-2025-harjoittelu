<?php
    $palvelin = "localhost";
    $kayttaja = "root";
    $salasana = "";
    $tietokanta = "uutissivusto2";

    $yhteys = new mysqli($palvelin, $kayttaja, $salasana, $tietokanta);

    if ($yhteys->connect_error) {
        die("Yhteyden muodostaminen epäonnistui: " . $yhteys->connect_error);
    }
    
    $yhteys->set_charset("utf8");

    $sql = "SELECT * FROM `blogikirjoitus` JOIN blogi ON blogi.blogi_id = blogikirjoitus.blogi_id ORDER BY julkaisuaika DESC";

    $tulokset = $yhteys->query($sql);

    $blogit = array();

    if($tulokset->num_rows > 0) {
        while($rivi = $tulokset->fetch_assoc()) {
            $blogit = $rivi;
        }

        header('Content-Type: application/json; charset=UTF-8');
        $json = json_encode($blogit);
        echo $json;
    }
?>