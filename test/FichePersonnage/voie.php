<?php
if ($nomPersonnage == "orochi" || $nomPersonnage == "orochiDragon" ) {
    echo "<script>console.log('Voie de orochi bien importer');</script>";
    
    $voie1Nom = "Forgeron";
    $voie1Niveau1 = '<img src="../img/voies/forge/rang_1.png" alt="" title="Niveau 1" width="50px">';
    $voie1DescriptionNiveau1 = "O";
    $voie1Niveau2 = '<img src="../img/voies/forge/rang_2.png" alt="" title="Niveau 2" width="50px">';
    $voie1DescriptionNiveau2 = "O";
    $voie1Niveau3 = '<img src="../img/voies/forge/rang_3.png" alt="" title="Niveau 3" width="50px">';
    $voie1DescriptionNiveau3 = "O";

    $voie2Nom = "Armurerie";
    $voie2Niveau1 = '<img src="../img/voies/armurier/rang_1.png" alt="" title="Niveau 1" width="50px">';
    $voie2DescriptionNiveau1 = "O";
    $voie2Niveau2 = '<img src="../img/voies/armurier/rang_2.png" alt="" title="Niveau 2" width="50px">';
    $voie2DescriptionNiveau2 = "O";
    $voie2Niveau3 = "";//'<img src="../img/voies/armurier/rang_3.png" alt="" title="Niveau 1" width="50px">';
    $voie2DescriptionNiveau3 = "";

    $voie3Nom = "";
    $voie3Niveau1 = "";
    $voie3DescriptionNiveau1 = "";
    $voie3Niveau2 = "";
    $voie3DescriptionNiveau2 = "";
    $voie3Niveau3 = "";
    $voie3DescriptionNiveau3 = "";

    $voie4Nom = "";
    $voie4Niveau1 = "";
    $voie4DescriptionNiveau1 = "";
    $voie4Niveau2 = "";
    $voie4DescriptionNiveau2 = "";
    $voie4Niveau3 = "";
    $voie4DescriptionNiveau3 = "";

    $voie5Nom = "";
    $voie5Niveau1 = "";
    $voie5DescriptionNiveau1 = "";
    $voie5Niveau2 = "";
    $voie5DescriptionNiveau2 = "";
    $voie5Niveau3 = "";
    $voie5DescriptionNiveau3 = "";

    $voie6Nom = "";
    $voie6Niveau1 = "";
    $voie6DescriptionNiveau1 = "";
    $voie6Niveau2 = "";
    $voie6DescriptionNiveau2 = "";
    $voie6Niveau3 = "";
    $voie6DescriptionNiveau3 = "";

} elseif ($nomPersonnage == "rackham") {
    echo "<script>console.log('Voie de Rackam bien importer');</script>";

    $voie1Nom = "Mercenaire";
    $voie1Niveau1 = '<img src="../img/voies/guerrier/rang_1.png" alt="" title="Niveau 1" width="50px">';
    $voie1DescriptionNiveau1 = "Maîtrise d'arme & +2 pts compétences";
    $voie1Niveau2 = '<img src="../img/voies/guerrier/rang_2.png" alt="" title="Niveau 2" width="50px">';
    $voie1DescriptionNiveau2 = "+1 force & +1 dextérité & +1 agilité & +3 DPS";
    $voie1Niveau3 = '<img src="../img/voies/guerrier/rang_3.png" alt="" title="Niveau 3" width="50px">';
    $voie1DescriptionNiveau3 = "+1 Maîtrise d'arme & +5 PV";

    $voie2Nom = "Chevalier Noir";
    $voie2Niveau1 = '<img src="../img/voies/chevalier_noir/rang_1.png" alt="" title="Niveau 1" width="50px">';
    $voie2DescriptionNiveau1 = "Maîtrise d'arme à 2 mains & +2 pts/niveau";
    $voie2Niveau2 = '<img src="../img/voies/chevalier_noir/rang_2.png" alt="" title="Niveau 2" width="50px">';
    $voie2DescriptionNiveau2 = " +1 force & +5 intimidation (art de la rue) & ciblage <50%";
    $voie2Niveau3 = "";//'<img src="../img/voies/chevalier_noir/rang_3.png" alt="" title="Niveau 1" width="50px">';
    $voie2DescriptionNiveau3 = "";

    $voie3Nom = "Mineur";
    $voie3Niveau1 = '<img src="../img/voies/mineur/rang_1.png" alt="" title="Niveau 1" width="50px">';
    $voie3DescriptionNiveau1 = "Arme contondante à 1 main & +2 pts/niveau";
    $voie3Niveau2 = '<img src="../img/voies/mineur/rang_2.png" alt="" title="Niveau 2" width="50px">';
    $voie3DescriptionNiveau2 = "Extraction (débloqué du rang 2 sans que celle-ci le soit)";
    $voie3Niveau3 = "";//'<img src="../img/voies/mineur/rang_3.png" alt="" title="Niveau 1" width="50px">';
    $voie3DescriptionNiveau3 = "";

    $voie4Nom = "Maître d'arme";
    $voie4Niveau1 = '<img src="../img/voies/maitre_arme/rang_1.png" alt="" title="Niveau 1" width="50px">';
    $voie4DescriptionNiveau1 = "";
    $voie4Niveau2 = "";//'<img src="../img/voies/maitre_arme/rang_2.png" alt="" title="Niveau 1" width="50px">';
    $voie4DescriptionNiveau2 = "";
    $voie4Niveau3 = "";//'<img src="../img/voies/maitre_arme/rang_3.png" alt="" title="Niveau 1" width="50px">';
    $voie4DescriptionNiveau3 = "";

    $voie5Nom = "";
    $voie5Niveau1 = "";
    $voie5DescriptionNiveau1 = "";
    $voie5Niveau2 = "";
    $voie5DescriptionNiveau2 = "";
    $voie5Niveau3 = "";
    $voie5DescriptionNiveau3 = "";

    $voie6Nom = "";
    $voie6Niveau1 = "";
    $voie6DescriptionNiveau1 = "";
    $voie6Niveau2 = "";
    $voie6DescriptionNiveau2 = "";
    $voie6Niveau3 = "";
    $voie6DescriptionNiveau3 = "";

} elseif ($nomPersonnage == "barfero" || $nomPersonnage == "barferoPossede" ) {
    echo "<script>console.log('Voie de Barfero bien importer');</script>";
    $voie1Nom = "Alchimiste";
    $voie1Niveau1 = '<img src="../img/voies/alchimie/rang_1.png" alt="" title="Niveau 1" width="50px">';
    $voie1DescriptionNiveau1 = "";
    $voie1Niveau2 = '<img src="../img/voies/alchimie/rang_2.png" alt="" title="Niveau 2" width="50px">';
    $voie1DescriptionNiveau2 = "";
    $voie1Niveau3 = '<img src="../img/voies/alchimie/rang_3.png" alt="" title="Niveau 3" width="50px">';
    $voie1DescriptionNiveau3 = "";

    $voie2Nom = "Mage d'ecriture";
    $voie2Niveau1 = '<img src="../img/voies/mage_ecriture/rang_1.png" alt="" title="Niveau 1" width="50px">';
    $voie2DescriptionNiveau1 = "";
    $voie2Niveau2 = ""/*'<img src="../img/voies/mage_ecriture/rang_2.png" alt="" title="Niveau 2" width="50px">'*/;
    $voie2DescriptionNiveau2 = "";
    $voie2Niveau3 = ""/*'<img src="../img/voies/mage_ecriture/rang_3.png" alt="" title="Niveau 3" width="50px">'*/;
    $voie2DescriptionNiveau3 = "";

    $voie3Nom = "Architect";
    $voie3Niveau1 = '<img src="../img/voies/architect/rang_1.png" alt="" title="Niveau 1" width="50px">';
    $voie3DescriptionNiveau1 = "";
    $voie3Niveau2 = '<img src="../img/voies/architect/rang_2.png" alt="" title="Niveau 2" width="50px">';
    $voie3DescriptionNiveau2 = "";
    $voie3Niveau3 = ""/*'<img src="../img/voies/architect/rang_3.png" alt="" title="Niveau 1" width="50px">';*/;
    $voie3DescriptionNiveau3 = "";

    $voie4Nom = "";
    $voie4Niveau1 = "";
    $voie4DescriptionNiveau1 = "";
    $voie4Niveau2 = "";
    $voie4DescriptionNiveau2 = "";
    $voie4Niveau3 = "";
    $voie4DescriptionNiveau3 = "";

    $voie5Nom = "";
    $voie5Niveau1 = "";
    $voie5DescriptionNiveau1 = "";
    $voie5Niveau2 = "";
    $voie5DescriptionNiveau2 = "";
    $voie5Niveau3 = "";
    $voie5DescriptionNiveau3 = "";

    $voie6Nom = "";
    $voie6Niveau1 = "";
    $voie6DescriptionNiveau1 = "";
    $voie6Niveau2 = "";
    $voie6DescriptionNiveau2 = "";
    $voie6Niveau3 = "";
    $voie6DescriptionNiveau3 = "";
} elseif ($nomPersonnage == "xanther") {
    echo "<script>console.log('Voie de Rackam bien importer');</script>";

    $voie1Nom = "Assassin";
    $voie1Niveau1 = '<img src="../img/voies/assassin/rang_1.png" alt="" title="Niveau 1" width="50px">';
    $voie1DescriptionNiveau1 = "";
    $voie1Niveau2 = '<img src="../img/voies/assassin/rang_2.png" alt="" title="Niveau 2" width="50px">';
    $voie1DescriptionNiveau2 = "";
    $voie1Niveau3 = '<img src="../img/voies/assassin/rang_3.png" alt="" title="Niveau 3" width="50px">';
    $voie1DescriptionNiveau3 = "";

    $voie2Nom = "Arbalètrier";
    $voie2Niveau1 = '<img src="../img/voies/arbalete/rang_1.png" alt="" title="Niveau 1" width="50px">';
    $voie2DescriptionNiveau1 = "";
    $voie2Niveau2 = '<img src="../img/voies/arbalete/rang_2.png" alt="" title="Niveau 2" width="50px">';
    $voie2DescriptionNiveau2 = "";
    $voie2Niveau3 = "";
    $voie2DescriptionNiveau3 = "";

    $voie3Nom = "";
    $voie3Niveau1 = "";
    $voie3DescriptionNiveau1 = "";
    $voie3Niveau2 = "";
    $voie3DescriptionNiveau2 = "";
    $voie3Niveau3 = "";
    $voie3DescriptionNiveau3 = "";

    $voie4Nom = "";
    $voie4Niveau1 = "";
    $voie4DescriptionNiveau1 = "";
    $voie4Niveau2 = "";
    $voie4DescriptionNiveau2 = "";
    $voie4Niveau3 = "";
    $voie4DescriptionNiveau3 = "";

    $voie5Nom = "";
    $voie5Niveau1 = "";
    $voie5DescriptionNiveau1 = "";
    $voie5Niveau2 = "";
    $voie5DescriptionNiveau2 = "";
    $voie5Niveau3 = "";
    $voie5DescriptionNiveau3 = "";

    $voie6Nom = "";
    $voie6Niveau1 = "";
    $voie6DescriptionNiveau1 = "";
    $voie6Niveau2 = "";
    $voie6DescriptionNiveau2 = "";
    $voie6Niveau3 = "";
    $voie6DescriptionNiveau3 = "";

}  elseif ($nomPersonnage == "exuy" || $nomPersonnage == "exuyGargouille") {
    echo "<script>console.log('Voie de Rackam bien importer');</script>";

    $voie1Nom = "";
    $voie1Niveau1 = "";
    $voie1DescriptionNiveau1 = "";
    $voie1Niveau2 = "";
    $voie1DescriptionNiveau2 = "";
    $voie1Niveau3 = "";
    $voie1DescriptionNiveau3 = "";

    $voie2Nom = "";
    $voie2Niveau1 = "";
    $voie2DescriptionNiveau1 = "";
    $voie2Niveau2 = "";
    $voie2DescriptionNiveau2 = "";
    $voie2Niveau3 = "";
    $voie2DescriptionNiveau3 = "";

    $voie3Nom = "";
    $voie3Niveau1 = "";
    $voie3DescriptionNiveau1 = "";
    $voie3Niveau2 = "";
    $voie3DescriptionNiveau2 = "";
    $voie3Niveau3 = "";
    $voie3DescriptionNiveau3 = "";

    $voie4Nom = "";
    $voie4Niveau1 = "";
    $voie4DescriptionNiveau1 = "";
    $voie4Niveau2 = "";
    $voie4DescriptionNiveau2 = "";
    $voie4Niveau3 = "";
    $voie4DescriptionNiveau3 = "";

    $voie5Nom = "";
    $voie5Niveau1 = "";
    $voie5DescriptionNiveau1 = "";
    $voie5Niveau2 = "";
    $voie5DescriptionNiveau2 = "";
    $voie5Niveau3 = "";
    $voie5DescriptionNiveau3 = "";

    $voie6Nom = "";
    $voie6Niveau1 = "";
    $voie6DescriptionNiveau1 = "";
    $voie6Niveau2 = "";
    $voie6DescriptionNiveau2 = "";
    $voie6Niveau3 = "";
    $voie6DescriptionNiveau3 = "";

} else {
    echo "<script>console.log('Inventaire collectif bien non importer');</script>";
}

?>