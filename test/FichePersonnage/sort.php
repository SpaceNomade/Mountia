<?php
if ($nomPersonnage == "orochi") {
    echo "<script>console.log('Sort de Orochi importer');</script>";
} elseif ($nomPersonnage == "orochiDragon"){
    echo "<script>console.log('Sort de Orochi le dragon importer');</script>";
} elseif ($nomPersonnage == "rackham"){
    echo "<script>console.log('Sort de Rackham importer');</script>";
} elseif ($nomPersonnage == "barfero"){
    echo "<script>console.log('Sort de Barfero importer');</script>";

    $sort1Nom = "Cri d'ether";
    $sort1Point = 5;
    $sort1Cout = 5;
    $sort1Degat = 9;
    $sort1Duree = "";
    $sort1Portée = 10;
    $sort1EffectSecondaire = "";
    $sort1Description = "";

    $sort2 = "Terreur";
    $sort2Point = 3;
    $sort2Cout = 5;
    $sort2Degat = "";
    $sort2Duree = 7;
    $sort2Portée = "Cible";
    $sort2EffectSecondaire = "-1 Peur";
    $sort2Description = "";

    $sort3 = "Piege";
    $sort3Point = 3;
    $sort3Cout = 6;
    $sort3Degat = 7;
    $sort3Duree = 2;
    $sort3Portée = 5;
    $sort3EffectSecondaire = "";
    $sort3Description = "";

    $sort4 = "Prison";
    $sort4Point = 5;
    $sort4Cout = 5;
    $sort4Degat = 9;
    $sort4Duree = "";
    $sort4Portée = 10;
    $sort4EffectSecondaire = "";
    $sort4Description = "";

    $sort5 = "Invocation Calcifer";
    $sort5Point = 3;
    $sort5Cout = 10;
    $sort5Degat = 9;
    $sort5Duree = 3;
    $sort5Portée = 10;
    $sort5EffectSecondaire = "Zone d'effet de 2m (implosion)";
    $sort5Description = "";

    $sort6 = "Portail";
    $sort6Point = "";
    $sort6Cout = "";
    $sort6Degat = "";
    $sort6Duree = "";
    $sort6Portée = "";
    $sort6EffectSecondaire = "";
    $sort6Description = "";

    $sort7 = "";
    $sort8 = "";
    $sort9 = "";

} elseif ($nomPersonnage == "barferoPossedé"){
    echo "<script>console.log('Sort de Barfero le Possédée importer');</script>";
} elseif ($nomPersonnage == "xanther"){
    echo "<script>console.log('Sort de Xanther importer');</script>";
} elseif ($nomPersonnage == "exyu"){
    echo "<script>console.log('Sort de Exyu importer');</script>";
} elseif ($nomPersonnage == "exyuGargouille"){
    echo "<script>console.log('Sort de Exyu la Gargouille importer');</script>";
}

?>