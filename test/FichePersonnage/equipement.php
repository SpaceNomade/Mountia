<?php
if ($nomPersonnage == "orochi" || $nomPersonnage == "orochiDragon") {
    echo "<script>console.log('Equipement de Orochi importer');</script>";

    $armureTeteNom = "";
    $armureEpaulesNom = "Spalière";
    $armureTorseNom = "Cuirasse";
    $armureBrasNom = "Bras D'armure";
    $armureTassetteNom = "Tassette";
    $armureJambesNom = "Jambière";
    $armurePiedsNom = "Soleret";

    $armureTeteRang = "";
    $armureEpaulesRang = "A";
    $armureTorseRang = "A";
    $armureBrasRang = "A";
    $armureTassetteRang = "A";
    $armureJambesRang = "A";
    $armurePiedsRang = "A";

    $armureTeteMatiere = "";
    $armureEpaulesMatiere = "Béryllium";
    $armureTorseMatiere = "Béryllium";
    $armureBrasMatiere = "Béryllium";
    $armureTassetteMatiere = "Béryllium";
    $armureJambesMatiere = "Béryllium";
    $armurePiedsMatiere = "Béryllium";


    $armureTetePhysique = 2;
    $armureEpaulesPhysique = 23+2;
    $armureTorsePhysique = 23+2;
    $armureBrasPhysique = 22+2;
    $armureTassettePhysique = 23+2;
    $armureJambesPhysique = 23+2;
    $armurePiedsPhysique = 23+2;

    $armureTeteMagique = 2;
    $armureEpaulesMagique = 22+2;
    $armureTorseMagique = 22+7;
    $armureBrasMagique = 23+2;
    $armureTassetteMagique = 22+2;
    $armureJambesMagique = 22+2;
    $armurePiedsMagique = 22+2;

    $armureTeteBonus = "";
    $armureEpaulesBonus = "";
    $armureTorseBonus = "";
    $armureBrasBonus = "";
    $armureTassetteBonus = "";
    $armureJambesBonus = "";
    $armurePiedsBonus = "";

    $armureTeteEnchantement = "";
    $armureEpaulesEnchantement = "";
    $armureTorseEnchantement = "";
    $armureBrasEnchantement = "";
    $armureTassetteEnchantement = "";
    $armureJambesEnchantement = "";
    $armurePiedsEnchantement = "";

    $arme1Nom = "Hikari No Kiba";
    $arme1Rang = "A";
    $arme1Materiaux = "Acier des cieux";
    $arme1DegatPhysique = 40;
    $arme1DegatMagique = 40;
    $arme1DegatOverTime = "";
    $arme1Portee = "0.8";
    $arme1Enchantement = "";
    $arme1Description = "Katana";

    $arme2Nom = "Shinigami";
    $arme2Rang = "A";
    $arme2Materiaux = "Acier des cieux";
    $arme2DegatPhysique = 42;
    $arme2DegatMagique = 42;
    $arme2DegatOverTime = "";
    $arme2Portee = 1.7;
    $arme2Enchantement = "";
    $arme2Description = "Odachi";

    $arme3Nom = "";
    $arme3Rang = "";
    $arme3Materiaux = "";
    $arme3DegatPhysique = "";
    $arme3DegatMagique = "";
    $arme3DegatOverTime = "";
    $arme3Portee = "";
    $arme3Enchantement = "";
    $arme3Description = "";

    $armurePhysiqueComplete = (($armureTetePhysique + $armureEpaulesPhysique + $armureTorsePhysique + $armureBrasPhysique + $armureTassettePhysique + $armureJambesPhysique + $armurePiedsPhysique)/ 7) * 2.5;

    $armureMagiqueComplete = (($armureTeteMagique + $armureEpaulesMagique + $armureTorseMagique + $armureBrasMagique + $armureTassetteMagique + $armureJambesMagique + $armurePiedsMagique)/ 7) * 2.5;

} elseif ($nomPersonnage == "rackham"){
    echo "<script>console.log('Equipement de Rackham importer');</script>";

    $armureTeteNom = "Heaume";
    $armureEpaulesNom = "Spalière";
    $armureTorseNom = "Cuirasse";
    $armureBrasNom = "Gantelets";
    $armureTassetteNom = "Tassette";
    $armureJambesNom = "Jambière";
    $armurePiedsNom = "Bottes";

    $armureTeteRang = "D";
    $armureEpaulesRang = "D";
    $armureTorseRang = "D";
    $armureBrasRang = "D";
    $armureTassetteRang = "D";
    $armureJambesRang = "D";
    $armurePiedsRang = "D";

    $armureTeteMatiere = "Acier";
    $armureEpaulesMatiere = "Acier";
    $armureTorseMatiere = "Acier";
    $armureBrasMatiere = "Acier";
    $armureTassetteMatiere = "Acier";
    $armureJambesMatiere = "Acier";
    $armurePiedsMatiere = "Acier";


    $armureTetePhysique = 9;
    $armureEpaulesPhysique = 9;
    $armureTorsePhysique = 9;
    $armureBrasPhysique = 9;
    $armureTassettePhysique = 9;
    $armureJambesPhysique = 9;
    $armurePiedsPhysique = 9;

    $armureTeteMagique = 8;
    $armureEpaulesMagique = 8;
    $armureTorseMagique = 8;
    $armureBrasMagique = 8;
    $armureTassetteMagique = 8;
    $armureJambesMagique = 8;
    $armurePiedsMagique = 8;

    $armureTeteBonus = "";
    $armureEpaulesBonus = "";
    $armureTorseBonus = "";
    $armureBrasBonus = "";
    $armureTassetteBonus = "";
    $armureJambesBonus = "";
    $armurePiedsBonus = "";

    $armureTeteEnchantement = "";
    $armureEpaulesEnchantement = "";
    $armureTorseEnchantement = "";
    $armureBrasEnchantement = "";
    $armureTassetteEnchantement = "";
    $armureJambesEnchantement = "";
    $armurePiedsEnchantement = "";

    $arme1Nom = "Espadon";
    $arme1Rang = "A";
    $arme1Materiaux = "Acier Draconique";
    $arme1DegatPhysique = 46;
    $arme1DegatMagique = 46;
    $arme1DegatOverTime = "";
    $arme1Portee = 2;
    $arme1Enchantement = "Vent";
    $arme1Description = "";

    $arme2Nom = "Dague";
    $arme2Rang = "D";
    $arme2Materiaux = "Fer";
    $arme2DegatPhysique = 11;
    $arme2DegatMagique = 11;
    $arme2DegatOverTime = "";
    $arme2Portee = "0,2";
    $arme2Enchantement = "";
    $arme2Description = "";

    $arme3Nom = "";
    $arme3Rang = "";
    $arme3Materiaux = "";
    $arme3DegatPhysique = "";
    $arme3DegatMagique = "";
    $arme3DegatOverTime = "";
    $arme3Portee = "";
    $arme3Enchantement = "";
    $arme3Description = "";

    $armurePhysiqueComplete = (($armureTetePhysique + $armureEpaulesPhysique + $armureTorsePhysique + $armureBrasPhysique + $armureTassettePhysique + $armureJambesPhysique + $armurePiedsPhysique)/ 7) * 2.5;

    $armureMagiqueComplete = (($armureTeteMagique + $armureEpaulesMagique + $armureTorseMagique + $armureBrasMagique + $armureTassetteMagique + $armureJambesMagique + $armurePiedsMagique)/ 7) * 2.5;

} elseif ($nomPersonnage == "barfero" || $nomPersonnage == "barferoPossedé"){
    echo "<script>console.log('Equipement de Barfero importer');</script>";

    $armureTeteNom = "Calotte";
    $armureEpaulesNom = "";
    $armureTorseNom = "Broigne";
    $armureBrasNom = "Brassard";
    $armureTassetteNom = "";
    $armureJambesNom = "Jambes Boissées";
    $armurePiedsNom = "Bottes Renforcées";

    $armureTeteRang = "A";
    $armureEpaulesRang = "";
    $armureTorseRang = "A";
    $armureBrasRang = "A";
    $armureTassetteRang = "";
    $armureJambesRang = "A";
    $armurePiedsRang = "A";

    $armureTeteMatiere = "Acier des Cieux";
    $armureEpaulesMatiere = "";
    $armureTorseMatiere = "Acier des Cieux";
    $armureBrasMatiere = "Acier des Cieux";
    $armureTassetteMatiere = "";
    $armureJambesMatiere = "Acier des Cieux";
    $armurePiedsMatiere = "Acier des Cieux";


    $armureTetePhysique = 13;
    $armureEpaulesPhysique = 0;
    $armureTorsePhysique = 13;
    $armureBrasPhysique = 12;
    $armureTassettePhysique = 0;
    $armureJambesPhysique = 13;
    $armurePiedsPhysique = 13;

    $armureTeteMagique = 12;
    $armureEpaulesMagique = 0;
    $armureTorseMagique = 12;
    $armureBrasMagique = 13;
    $armureTassetteMagique = 0;
    $armureJambesMagique = 12;
    $armurePiedsMagique = 12;

    $armureTeteBonus = "";
    $armureEpaulesBonus = "";
    $armureTorseBonus = "";
    $armureBrasBonus = "";
    $armureTassetteBonus = "";
    $armureJambesBonus = "";
    $armurePiedsBonus = "";

    $armureTeteEnchantement = "";
    $armureEpaulesEnchantement = "";
    $armureTorseEnchantement = "";
    $armureBrasEnchantement = "";
    $armureTassetteEnchantement = "";
    $armureJambesEnchantement = "";
    $armurePiedsEnchantement = "";

    $arme1Nom = "Dague (gauche)";
    $arme1Rang = "A";
    $arme1Materiaux = "Acier des cieux";
    $arme1DegatPhysique = 24;
    $arme1DegatMagique = 24;
    $arme1DegatOverTime = "";
    $arme1Portee = "CaC";
    $arme1Enchantement = "";
    $arme1Description = "";

    $arme2Nom = "Dague (droite)";
    $arme2Rang = "A";
    $arme2Materiaux = "Acier des cieux";
    $arme2DegatPhysique = 24;
    $arme2DegatMagique = 24;
    $arme2DegatOverTime = "";
    $arme2Portee = "CaC";
    $arme2Enchantement = "";
    $arme2Description = "";

    $arme3Nom = "Arc Magique de foudre";
    $arme3Rang = "B";
    $arme3Materiaux = "Acier Blanc";
    $arme3DegatPhysique = 22;
    $arme3DegatMagique = 28;
    $arme3DegatOverTime = "";
    $arme3Portee = 150;
    $arme3Enchantement = "";
    $arme3Description = "";

    $arme4Nom = "Arbalete";
    $arme4Rang = "A";
    $arme4Materiaux = "Argent";
    $arme4DegatPhysique = 22;
    $arme4DegatMagique = 22;
    $arme4DegatOverTime = "";
    $arme4Portee = 20;
    $arme4Enchantement = "";
    $arme4Description = "";

    $armurePhysiqueComplete = (($armureTetePhysique + $armureEpaulesPhysique + $armureTorsePhysique + $armureBrasPhysique + $armureTassettePhysique + $armureJambesPhysique + $armurePiedsPhysique)/ 5) * 1.5;

    $armureMagiqueComplete = (($armureTeteMagique + $armureEpaulesMagique + $armureTorseMagique + $armureBrasMagique + $armureTassetteMagique + $armureJambesMagique + $armurePiedsMagique)/ 5) * 1.5;
    

} elseif ($nomPersonnage == "xanther"){
    echo "<script>console.log('Equipement de Xanther importer');</script>";

    $armureTeteNom = "Coiffe";
    $armureEpaulesNom = "";
    $armureTorseNom = "Pourpoing";
    $armureBrasNom = "Brassard";
    $armureTassetteNom = "";
    $armureJambesNom = "Jambes Gamboisées";
    $armurePiedsNom = "Bottes Renforcées";

    $armureTeteRang = "B";
    $armureEpaulesRang = "B";
    $armureTorseRang = "B";
    $armureBrasRang = "B";
    $armureTassetteRang = "B";
    $armureJambesRang = "B";
    $armurePiedsRang = "B";

    $armureTeteMatiere = "Cuir Cloutée";
    $armureEpaulesMatiere = "";
    $armureTorseMatiere = "Cuir Cloutée";
    $armureBrasMatiere = "Cuir Cloutée";
    $armureTassetteMatiere = "";
    $armureJambesMatiere = "Cuir Cloutée";
    $armurePiedsMatiere = "Cuir Cloutée";


    $armureTetePhysique = 9;
    $armureEpaulesPhysique = 9;
    $armureTorsePhysique = 9;
    $armureBrasPhysique = 9;
    $armureTassettePhysique = 9;
    $armureJambesPhysique = 9;
    $armurePiedsPhysique = 9;

    $armureTeteMagique = 9;
    $armureEpaulesMagique = 9;
    $armureTorseMagique = 9;
    $armureBrasMagique = 9;
    $armureTassetteMagique = 9;
    $armureJambesMagique = 9;
    $armurePiedsMagique = 9;

    $armureTeteBonus = "";
    $armureEpaulesBonus = "";
    $armureTorseBonus = "";
    $armureBrasBonus = "";
    $armureTassetteBonus = "";
    $armureJambesBonus = "";
    $armurePiedsBonus = "";

    $armureTeteEnchantement = "";
    $armureEpaulesEnchantement = "";
    $armureTorseEnchantement = "";
    $armureBrasEnchantement = "";
    $armureTassetteEnchantement = "";
    $armureJambesEnchantement = "";
    $armurePiedsEnchantement = "";

    $arme1Nom = "Dague";
    $arme1Rang = "D";
    $arme1Materiaux = "Fer";
    $arme1DegatPhysique = 10;
    $arme1DegatMagique = 10;
    $arme1DegatOverTime = "";
    $arme1Portee = "20 cm";
    $arme1Enchantement = "";
    $arme2Description = "";

    $arme2Nom = "Arbalete Lourde";
    $arme2Rang = "A";
    $arme2Materiaux = "Acier";
    $arme2DegatPhysique = 35;
    $arme2DegatMagique = 35;
    $arme2DegatOverTime = "";
    $arme2Portee = 300;
    $arme2Enchantement = "";
    $arme2Description = "";

    $arme3Nom = "";
    $arme3Rang = "";
    $arme3Materiaux = "";
    $arme3DegatPhysique = "";
    $arme3DegatMagique = "";
    $arme3DegatOverTime = "";
    $arme3Portee = "";
    $arme3Enchantement = "";
    $arme3Description = "";

    $armurePhysiqueComplete = (($armureTetePhysique + $armureEpaulesPhysique + $armureTorsePhysique + $armureBrasPhysique + $armureTassettePhysique + $armureJambesPhysique + $armurePiedsPhysique)/ 5) * 1.5;

    $armureMagiqueComplete = (($armureTeteMagique + $armureEpaulesMagique + $armureTorseMagique + $armureBrasMagique + $armureTassetteMagique + $armureJambesMagique + $armurePiedsMagique)/ 5) * 1.5;

} elseif ($nomPersonnage == "exyu"){
    echo "<script>console.log('Equipement de Exyu importer');</script>";

    $armureTeteNom = "Calotte";
    $armureEpaulesNom = "";
    $armureTorseNom = "Pourpoing";
    $armureBrasNom = "Brassards";
    $armureTassetteNom = "";
    $armureJambesNom = "Bambes Gamboisées";
    $armurePiedsNom = "Bottes Renforcées";

    $armureTeteRang = "D";
    $armureEpaulesRang = "";
    $armureTorseRang = "D";
    $armureBrasRang = "D";
    $armureTassetteRang = "";
    $armureJambesRang = "D";
    $armurePiedsRang = "D";

    $armureTeteMatiere = "Cuir";
    $armureEpaulesMatiere = "";
    $armureTorseMatiere = "Cuir";
    $armureBrasMatiere = "Cuir";
    $armureTassetteMatiere = "";
    $armureJambesMatiere = "Cuir";
    $armurePiedsMatiere = "Cuir";


    $armureTetePhysique = 8 ;
    $armureEpaulesPhysique = 0;
    $armureTorsePhysique = 7;
    $armureBrasPhysique = 7;
    $armureTassettePhysique = 0;
    $armureJambesPhysique = 8;
    $armurePiedsPhysique = 8;

    $armureTeteMagique = 7;
    $armureEpaulesMagique = 0;
    $armureTorseMagique = 8;
    $armureBrasMagique = 8;
    $armureTassetteMagique = 0;
    $armureJambesMagique = 7;
    $armurePiedsMagique = 7;

    $armureTeteBonus = "";
    $armureEpaulesBonus = "";
    $armureTorseBonus = "";
    $armureBrasBonus = "";
    $armureTassetteBonus = "";
    $armureJambesBonus = "";
    $armurePiedsBonus = "";

    $armureTeteEnchantement = "";
    $armureEpaulesEnchantement = "";
    $armureTorseEnchantement = "";
    $armureBrasEnchantement = "";
    $armureTassetteEnchantement = "";
    $armureJambesEnchantement = "";
    $armurePiedsEnchantement = "";

    $arme1Nom = "Dague";
    $arme1Rang = "";
    $arme1Materiaux = "";
    $arme1DegatPhysique = 7;
    $arme1DegatMagique = 7;
    $arme1DegatOverTime = "";
    $arme1Portee = "";
    $arme1Enchantement = "";
    $arme1Description = "";

    $arme2Nom = "";
    $arme2Rang = "";
    $arme2Materiaux = "";
    $arme2DegatPhysique = "";
    $arme2DegatMagique = "";
    $arme2DegatOverTime = "";
    $arme2Portee = "";
    $arme2Enchantement = "";
    $arme2Description = "";

    $arme3Nom = "";
    $arme3Rang = "";
    $arme3Materiaux = "";
    $arme3DegatPhysique = "";
    $arme3DegatMagique = "";
    $arme3DegatOverTime = "";
    $arme3Portee = "";
    $arme3Enchantement = "";
    $arme3Description = "";

    $armurePhysiqueComplete = (($armureTetePhysique + $armureEpaulesPhysique + $armureTorsePhysique + $armureBrasPhysique + $armureTassettePhysique + $armureJambesPhysique + $armurePiedsPhysique)/ 5) * 1.5;

    $armureMagiqueComplete = (($armureTeteMagique + $armureEpaulesMagique + $armureTorseMagique + $armureBrasMagique + $armureTassetteMagique + $armureJambesMagique + $armurePiedsMagique)/ 5) * 1.5;

} elseif ($nomPersonnage == "exyuGargouille"){
    echo "<script>console.log('Equipement de Exyu la Gargouille importer');</script>";

    $armureTeteNom = "";
    $armureEpaulesNom = "";
    $armureTorseNom = "";
    $armureBrasNom = "";
    $armureTassetteNom = "";
    $armureJambesNom = "";
    $armurePiedsNom = "";

    $armureTeteMatiere = "Cuir";
    $armureEpaulesMatiere = "Cuir";
    $armureTorseMatiere = "Cuir";
    $armureBrasMatiere = "Cuir";
    $armureTassetteMatiere = "Cuir";
    $armureJambesMatiere = "Cuir";
    $armurePiedsMatiere = "Cuir";


    $armureTetePhysique = 2;
    $armureEpaulesPhysique = 2;
    $armureTorsePhysique = 2;
    $armureBrasPhysique = 2;
    $armureTassettePhysique = 2;
    $armureJambesPhysique = 2;
    $armurePiedsPhysique = 2;

    $armureTeteMagique = 2;
    $armureEpaulesMagique = 2;
    $armureTorseMagique = 2;
    $armureBrasMagique = 2;
    $armureTassetteMagique = 2;
    $armureJambesMagique = 2;
    $armurePiedsMagique = 2;

    $armureTeteBonus = "";
    $armureEpaulesBonus = "";
    $armureTorseBonus = "";
    $armureBrasBonus = "";
    $armureTassetteBonus = "";
    $armureJambesBonus = "";
    $armurePiedsBonus = "";

    $armureTeteEnchantement = "";
    $armureEpaulesEnchantement = "";
    $armureTorseEnchantement = "";
    $armureBrasEnchantement = "";
    $armureTassetteEnchantement = "";
    $armureJambesEnchantement = "";
    $armurePiedsEnchantement = "";

    $arme1Nom = "";
    $arme1Rang = "";
    $arme1Materiaux = "";
    $arme1DegatPhysique = "";
    $arme1DegatMagique = "";
    $arme1DegatOverTime = "";
    $arme1Portee = "";
    $arme1Enchantement = "";
    $arme1Description = "";

    $arme2Nom = "";
    $arme2Rang = "";
    $arme2Materiaux = "";
    $arme2DegatPhysique = "";
    $arme2DegatMagique = "";
    $arme2DegatOverTime = "";
    $arme2Portee = "";
    $arme2Enchantement = "";
    $arme2Description = "";

    $arme3Nom = "";
    $arme3Rang = "";
    $arme3Materiaux = "";
    $arme3DegatPhysique = "";
    $arme3DegatMagique = "";
    $arme3DegatOverTime = "";
    $arme3Portee = "";
    $arme3Enchantement = "";
    $arme3Description = "";

    $armurePhysiqueComplete = (($armureTetePhysique + $armureEpaulesPhysique + $armureTorsePhysique + $armureBrasPhysique + $armureTassettePhysique + $armureJambesPhysique + $armurePiedsPhysique)/ 5) * 1.5;

    $armureMagiqueComplete = (($armureTeteMagique + $armureEpaulesMagique + $armureTorseMagique + $armureBrasMagique + $armureTassetteMagique + $armureJambesMagique + $armurePiedsMagique)/ 5) * 1.5;

} else {
    echo "<script>console.log('Equipement non recuperer')</script>";
}
