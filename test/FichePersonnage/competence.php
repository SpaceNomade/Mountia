<?php
if ($nomPersonnage == "orochi" || $nomPersonnage == "orochiDragon") {
    echo "<script>console.log('Competence de Orochi importer');</script>";

    $artDeLaRue = 2;
    $athletisme = 6;
    $bibliotheque = 4;
    $charmeCompetence = 4;
    $chercher = 6;
    $conduite = 4;
    $credit = 0;
    $cuisine = 4;
    $diplomatie = 4;
    $discretion = 4;
    $equitation = 1;
    $intuition = 10;
    $maniement = $dexterité;
    $langueMaternelle = $intelligence;

    $larcin = 2;
    $leadership = 3;
    $legende = 2;
    $medecine = 1;
    $navigation = 4;
    $orientation = 7;
    $portage = $force;
    $pilotage = 1;
    $premierSoins = 6;
    $psychologie = 2;
    $savoir = $sagesse;
    $secondeVue = $potentiel;
    $survie = 2;
    $sprint = $initiative;

    $traque = 2;
    $bonus1Nom = "Forge";
    $bonus1Valeur = 16;
    $bonus2Nom = "Confection darme";
    $bonus2Valeur = 18;
    $bonus3Nom = "Arme a une main";
    $bonus3Valeur = 15;
    $bonus4Nom = "Armurie";
    $bonus4Valeur = 9;
    $bonus5Nom = "Armes a deux mains";
    $bonus5Valeur = 5;
    $bonus6Nom = "X";
    $bonus6Valeur = "X";
    $bonus7Nom = "X";
    $bonus7Valeur = "X";
    $bonus8Nom = "X";
    $bonus8Valeur = "X";
    $bonus9Nom = "X";
    $bonus9Valeur = "X";
    $bonus10Nom = "X";
    $bonus10Valeur = "X";
    $bonus11Nom = "X";
    $bonus11Valeur = "X";
    $bonus12Nom = "X";
    $bonus12Valeur = "X";
    $bonus13Nom = "Armure";
    $bonus13Valeur = 2+1;

} elseif ($nomPersonnage == "rackham"){
    echo "<script>console.log('Competence de Rackham importer');</script>";

    $artDeLaRue = 2+5;
    $athletisme = 6+1;
    $bibliotheque = 4;
    $charmeCompetence = 4;
    $chercher = 6;
    $conduite = 4;
    $credit = 0+5;
    $cuisine = 4;
    $diplomatie = 4;
    $discretion = 4+3;
    $equitation = 1;
    $intuition = 4+3;
    $maniement = $dexterité;
    $langueMaternelle = $intelligence;

    $larcin = 2;
    $leadership = 3;
    $legende = 2;
    $medecine = 1+2;
    $navigation = 1;
    $orientation = 2;
    $portage = $force;
    $pilotage = 1;
    $premierSoins = 6+2;
    $psychologie = 2+5;
    $savoir = $sagesse;
    $secondeVue = $potentiel;
    $survie = 2;
    $sprint = $initiative;

    $traque = 2+7;
    $bonus1Nom = "Espadon";
    $bonus1Valeur = 9+9;
    $bonus2Nom = "Corps a corps";
    $bonus2Valeur = 7;
    $bonus3Nom = "Dague";
    $bonus3Valeur = 7;
    $bonus4Nom = "Marteau de guerre";
    $bonus4Valeur = 2;
    $bonus5Nom = "X";
    $bonus5Valeur = "X";
    $bonus6Nom = "X";
    $bonus6Valeur = "X";
    $bonus7Nom = "X";
    $bonus7Valeur = "X";
    $bonus8Nom = "X";
    $bonus8Valeur = "X";
    $bonus9Nom = "X";
    $bonus9Valeur = "X";
    $bonus10Nom = "X";
    $bonus10Valeur = "X";
    $bonus11Nom = "X";
    $bonus11Valeur = "X";
    $bonus12Nom = "X";
    $bonus12Valeur = "X";
    $bonus13Nom = "Armure";
    $bonus13Valeur = 2+6+6;

} elseif ($nomPersonnage == "barfero" || $nomPersonnage == "barferoPossedé"){
    echo "<script>console.log('Competence de Barfero importer');</script>";

    $users = [
        [
            "name" => "Art De La Rue",
            "job" => "2",

        ],
        [
            "name" => "bernard",
            "job" => "robotpsycologue",
           
        ],
        [
            "name" => "robert",
            "job" => "directeur",

        ],
        [
            "name" => "maeve",
            "job" => "maquerelle",

        ],
        [
            "name" => "teddy",
            "job" => "inconnu",
        ],
        [
            "name" => "william",
            "job" => "actionnaire",
        ],
        [
            "name" => "Elsie",
            "job" => "programmeur",
        ]
    ];

    $artDeLaRue = 2;
    $athletisme = 6;
    $bibliotheque = 4;
    $charmeCompetence = 4;
    $chercher = 6;
    $conduite = 4;
    $credit = 0+14;
    $cuisine = 4;
    $diplomatie = 4+4;
    $discretion = 4;
    $equitation = 1;
    $intuition = 4;
    $maniement = $dexterité;
    $langueMaternelle = $intelligence;

    $larcin = 2;
    $leadership = 3;
    $legende = 2+12;
    $medecine = 1;
    $navigation = 1;
    $orientation = 2;
    $portage = $force;
    $pilotage = 1;
    $premierSoins = 6;
    $psychologie = 2;
    $savoir = $sagesse;
    $secondeVue = $potentiel;
    $survie = 2;
    $sprint = $initiative;

    $traque = 2;
    $bonus1Nom = "Potion";
    $bonus1Valeur = 14;
    $bonus2Nom = "Alchimie";
    $bonus2Valeur = 14;
    $bonus3Nom = "Arbalete";
    $bonus3Valeur = 5;
    $bonus4Nom = "Ecriture";
    $bonus4Valeur = "50%";
    $bonus5Nom = "X";
    $bonus5Valeur = "X";
    $bonus6Nom = "X";
    $bonus6Valeur = "X";
    $bonus7Nom = "X";
    $bonus7Valeur = "X";
    $bonus8Nom = "X";
    $bonus8Valeur = "X";
    $bonus9Nom = "X";
    $bonus9Valeur = "X";
    $bonus10Nom = "X";
    $bonus10Valeur = "X";
    $bonus11Nom = "X";
    $bonus11Valeur = "X";
    $bonus12Nom = "X";
    $bonus12Valeur = "X";
    $bonus13Nom = "Armure";
    $bonus13Valeur = 2+8;

} elseif ($nomPersonnage == "xanther"){
    echo "<script>console.log('Competence de Xanther importer');</script>";

    $artDeLaRue = 6;
    $athletisme = 6;
    $bibliotheque = 4;
    $charmeCompetence = 4;
    $chercher = 6;
    $conduite = 4;
    $credit = 0;
    $cuisine = 4;
    $diplomatie = 4;
    $discretion = 4;
    $equitation = 1;
    $intuition = 9;
    $maniement = $dexterité;
    $langueMaternelle = $intelligence;

    $larcin = 10;
    $leadership = 3;
    $legende = 2;
    $medecine = 1;
    $navigation = 1;
    $orientation = 8;
    $portage = $force;
    $pilotage = 1;
    $premierSoins = 6;
    $psychologie = 3;
    $savoir = $sagesse;
    $secondeVue = $potentiel;
    $survie = 3;
    $sprint = $initiative;

    $traque = 10;
    $bonus1Nom = "Dague";
    $bonus1Valeur = 6;
    $bonus2Nom = "Poison";
    $bonus2Valeur = 9;
    $bonus3Nom = "Arbalète";
    $bonus3Valeur = 9;
    $bonus4Nom = "Arc";
    $bonus4Valeur = 4;
    $bonus5Nom = "X";
    $bonus5Valeur = "X";
    $bonus6Nom = "X";
    $bonus6Valeur = "X";
    $bonus7Nom = "X";
    $bonus7Valeur = "X";
    $bonus8Nom = "X";
    $bonus8Valeur = "X";
    $bonus9Nom = "X";
    $bonus9Valeur = "X";
    $bonus10Nom = "X";
    $bonus10Valeur = "X";
    $bonus11Nom = "X";
    $bonus11Valeur = "X";
    $bonus12Nom = "X";
    $bonus12Valeur = "X";
    $bonus13Nom = "Armure";
    $bonus13Valeur = "X";

} elseif ($nomPersonnage == "exyu"){
    echo "<script>console.log('Competence de Exyu importer');</script>";

    $artDeLaRue = 2;
    $athletisme = 6;
    $bibliotheque = 4;
    $charmeCompetence = 4;
    $chercher = 6;
    $conduite = 4;
    $credit = 0;
    $cuisine = 4;
    $diplomatie = 4;
    $discretion = 4;
    $equitation = 1;
    $intuition = 4;
    $maniement = $dexterité;
    $langueMaternelle = $intelligence;

    $larcin = 2;
    $leadership = 3;
    $legende = 2;
    $medecine = 1;
    $navigation = 1;
    $orientation = 2;
    $portage = $force;
    $pilotage = 1;
    $premierSoins = 6;
    $psychologie = 2;
    $savoir = $sagesse;
    $secondeVue = $potentiel;
    $survie = 2;
    $sprint = $initiative;

    $traque = 2;
    $bonus1Nom = "Potion";
    $bonus1Valeur = 12;
    $bonus2Nom = "Alchimie";
    $bonus2Valeur = 12;
    $bonus3Nom = "Arbalete";
    $bonus3Valeur = "5";
    $bonus4Nom = "X";
    $bonus4Valeur = "X";
    $bonus5Nom = "X";
    $bonus5Valeur = "X";
    $bonus6Nom = "X";
    $bonus6Valeur = "X";
    $bonus7Nom = "X";
    $bonus7Valeur = "X";
    $bonus8Nom = "X";
    $bonus8Valeur = "X";
    $bonus9Nom = "X";
    $bonus9Valeur = "X";
    $bonus10Nom = "X";
    $bonus10Valeur = "X";
    $bonus11Nom = "X";
    $bonus11Valeur = "X";
    $bonus12Nom = "X";
    $bonus12Valeur = "X";
    $bonus13Nom = "Armure";
    $bonus13Valeur = 10;

} elseif ($nomPersonnage == "exyuGargouille"){
    echo "<script>console.log('Competence de Exyu la Gargouille importer');</script>";

    $artDeLaRue = 2;
    $athletisme = 6;
    $bibliotheque = 4;
    $charmeCompetence = 4;
    $chercher = 6;
    $conduite = 4;
    $credit = 0;
    $cuisine = 4;
    $diplomatie = 4;
    $discretion = 4;
    $equitation = 1;
    $intuition = 4;
    $maniement = $dexterité;
    $langueMaternelle = $intelligence;

    $larcin = 2;
    $leadership = 3;
    $legende = 2;
    $medecine = 1;
    $navigation = 1;
    $orientation = 2;
    $portage = $force;
    $pilotage = 1;
    $premierSoins = 6;
    $psychologie = 2;
    $savoir = $sagesse;
    $secondeVue = $potentiel;
    $survie = 2;
    $sprint = $initiative;

    $traque = 2;
    $bonus1Nom = "Potion";
    $bonus1Valeur = 12;
    $bonus2Nom = "Alchimie";
    $bonus2Valeur = 12;
    $bonus3Nom = "Arbalete";
    $bonus3Valeur = "5";
    $bonus4Nom = "X";
    $bonus4Valeur = "X";
    $bonus5Nom = "X";
    $bonus5Valeur = "X";
    $bonus6Nom = "X";
    $bonus6Valeur = "X";
    $bonus7Nom = "X";
    $bonus7Valeur = "X";
    $bonus8Nom = "X";
    $bonus8Valeur = "X";
    $bonus9Nom = "X";
    $bonus9Valeur = "X";
    $bonus10Nom = "X";
    $bonus10Valeur = "X";
    $bonus11Nom = "X";
    $bonus11Valeur = "X";
    $bonus12Nom = "X";
    $bonus12Valeur = "X";
    $bonus13Nom = "Armure";
    $bonus13Valeur = "X";

} else {
    echo "<script>console.log('Competence de personne importer');</script>";

    $artDeLaRue = "X";
    $athletisme = "X";
    $bibliotheque = "X";
    $charmeCompetence = "X";
    $chercher = "X";
    $conduite = "X";
    $credit = "X";
    $cuisine = "X";
    $diplomatie = "X";
    $discretion = "X";
    $equitation = "X";
    $intuition = "X";
    $maniement = $dexterité;
    $langueMaternelle = $intelligence;

    $larcin = "X";
    $leadership = "X";
    $legende = "X";
    $medecine = "X";
    $navigation = "X";
    $orientation = "X";
    $portage = $force;
    $pilotage = "X";
    $premierSoins = "X";
    $psychologie = "X";
    $savoir = $sagesse;
    $secondeVue = $potentiel;
    $survie = "X";
    $sprint = $initiative;

    $traque = "X";
    $bonus1Nom = "X";
    $bonus1Valeur = "12";
    $bonus2Nom = "X";
    $bonus2Valeur = "X";
    $bonus3Nom = "X";
    $bonus3Valeur = "X";
    $bonus4Nom = "X";
    $bonus4Valeur = "X";
    $bonus5Nom = "X";
    $bonus5Valeur = "X";
    $bonus6Nom = "X";
    $bonus6Valeur = "X";
    $bonus7Nom = "X";
    $bonus7Valeur = "X";
    $bonus8Nom = "X";
    $bonus8Valeur = "X";
    $bonus9Nom = "X";
    $bonus9Valeur = "X";
    $bonus10Nom = "X";
    $bonus10Valeur = "X";
    $bonus11Nom = "X";
    $bonus11Valeur = "X";
    $bonus12Nom = "X";
    $bonus12Valeur = "X";
    $bonus13Nom = "Armure";
    $bonus13Valeur = "X";

}