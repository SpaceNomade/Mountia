<?php
    if ($nomPersonnage == "orochi") {        
        $nomInvocateur = "Orochi";
        $surnomInvocateur = "l'Éxilé";
        $verdict = "<script>confirm('Orochi est invoquer');</script>";
        $messageAme = "L'âme du guerrier $nomInvocateur, également appeler $surnomInvocateur est invoquée.";
        echo "<script> console.log('Equipement de $nomInvocateur')</script>";

        $florinOr = 71+20;
        $florinArgent = 8;
        $florinCuivre = 0;

        $race = "Drakens";
        $metier1 = "Forgeron";
        $metier2 = "";
        $alignement = "Neutre";
        $couleur = "Gris";
        $niveau = 2;
        $experience = 4;
        $age = 21;
        $sexe = "M";
        $poids = 140;
        $taille = "2,00";

        $charisme = 7+2;
        $force = 9+3;
        $endurance = 10+2;
        $dexterité = 8+3;
        $agilité = 13;
        $intelligence = 7;
        $sagesse = 6;
        $potentiel = 4;
        $initiative = 7+2;
        $chance = 7;
        $froid = 7;
        $chaleur = 7+4;
        $maladie = 7;
        $boisson = 7;
        $charme = 7;
        $peur = 7;
        $sommeil = 7;
        $douleur = 7+4; 

        $pdvBonus = 13;
        $pdv = $force + $endurance + $pdvBonus;
        $pdsBonus = -11;
        $pds = $intelligence + $sagesse + $pdsBonus;
        $pdmBonus = 0;
        $pdm = $pds + $potentiel + $pdmBonus - $pdsBonus;

        $irrégularité = "L'irrégularité de $nomInvocateur est l'agilité.Cette irrégularité est d'une valeur de $agilité";
    } elseif ($nomPersonnage == "orochiDragon"){
        $nomInvocateur = "Orochi";
        $surnomInvocateur = "le dragon Éxilé";
        $verdict = "<script>confirm('Orochi le dragon est invoquer');</script>";
        $messageAme = "L'âme du guerrier $nomInvocateur, également appeler $surnomInvocateur est invoquée.";
        $statutMental = "Transformer";
        echo "<script> console.log('Equipement de $nomInvocateur')</script>";


        $florinOr = 71+20;
        $florinArgent = 8;
        $florinCuivre = 0;

        $race = "Drakans";
        $metier1 = "Forgeron";
        $metier2 = "";
        $alignement = "Neutre";
        $couleur = "Gris";
        $niveau = 2;
        $experience = 4;
        $age = 21;
        $sexe = "M";
        $poids = 210;
        $taille = "3,00";

        $charisme = 9;
        $force = 12+6;
        $endurance = 12+6;
        $dexterité = 11;
        $agilité = 13;
        $intelligence = 7;
        $sagesse = 6;
        $potentiel = 4;
        $initiative = 9;
        $chance = 7;
        $froid = 7;
        $chaleur = 11;
        $maladie = 7;
        $boisson = 7;
        $charme = 7;
        $peur = 7;
        $sommeil = 7;
        $douleur = 11; 

        $pdvBonus = 13;
        $pdv = $force + $endurance + $pdvBonus;
        $pdsBonus = -11;
        $pds = $intelligence + $sagesse + $pdsBonus;
        $pdmBonus = 0;
        $pdm = $pds + $potentiel + $pdmBonus - $pdsBonus;

        $irrégularité = "L'irrégularité de $nomInvocateur est l'agilité.Cette irrégularité est d'une valeur de $agilité";

    
    } elseif ($nomPersonnage == "rackham"){
        $nomInvocateur = "Rackham";
        $surnomInvocateur = "basarab le pourfendeur de vent";
        $verdict = "<script>confirm('Rackham est invoquer');</script>";
        $messageAme = "L'âme du guerrier $nomInvocateur, également appeler $surnomInvocateur est invoquée.";
        echo "<script> console.log('Equipement de $nomInvocateur')</script>";

        $florinOr = 74+20;
        $florinArgent = 7;
        $florinCuivre = 2;

        $race = "Rédioras";
        $metier1 = "Mercenaire";
        $metier2 = "NC";
        $alignement = "Neutre";
        $couleur = "Violette";
        $niveau = 2+1;
        $experience = 4+2;
        $age = 24;
        $sexe = "M";
        $poids = 220;
        $taille = "2,40";

        $charisme = 7;
        $force = 12+1;
        $endurance = 9;
        $dexterité = 9+5;
        $agilité = 8+1;
        $intelligence = 7+4;
        $sagesse = 4;
        $potentiel = 5;
        $initiative = 7+2;
        $chance = 5;
        $froid = 7;
        $chaleur = 7;
        $maladie = 7;
        $boisson = 7;
        $charme = 7;
        $peur = 7;
        $sommeil = 7;
        $douleur = 7;

        $pdvBonus = 13;
        $pdv = $force + $endurance + $pdvBonus;
        $pdsBonus = 13;
        $pds = $intelligence + $sagesse + $pdsBonus;
        $pdmBonus = 0;
        $pdm = $pds + $potentiel + $pdmBonus - $pdsBonus;

        $irrégularité = "L'irrégularité de $nomInvocateur est la dexterité.Cette irrégularité est d'une valeur de $dexterité";


    } elseif ($nomPersonnage == "barfero") {
        $nomInvocateur = "Barfero";
        $surnomInvocateur = "l'astronome erudit";
        $verdict = "<script>confirm('Barfero est invoquer');</script>";
        $messageAme = "L'âme du guerrier $nomInvocateur, également appeler $surnomInvocateur est invoquée.";
        $statutMental = "Normal";
        echo "<script> console.log('Equipement de $nomInvocateur')</script>";

        $florinOr = 19+46+20+14-16-144+108;
        $florinArgent = 8+8;
        $florinCuivre = "0";

        $race = "Lunaréen";
        $metier1 = "Alchimiste";
        $metier2 = "NC";
        $alignement = "Chaotique / Bon";
        $couleur = "Bleu / Gris";
        $niveau = 2+1;
        $experience = 4+2;
        $age = 810;
        $sexe = "M";
        $poids = 28;
        $taille = "1,95";

        $charisme = 9;
        $force = 5;
        $endurance = 5;
        $dexterité = 7;
        $agilité = 5;
        $intelligence = 8;
        $sagesse = 10+2;
        $potentiel = 15;
        $initiative = 8;
        $chance = 5;
        $froid = 7;
        $chaleur = 7;
        $maladie = 11;
        $boisson = 7;
        $charme = 7;
        $peur = 7;
        $sommeil = 7;
        $douleur = 7;

        $pdvBonus = -4;
        $pdv = $force + $endurance + $pdvBonus;
        $pdsBonus = 0;
        $pds = $intelligence + $sagesse + $pdsBonus;
        $pdmBonus = 24;
        $pdm = $pds + $potentiel + $pdmBonus - $pdsBonus;

        $irrégularité = "L'irrégularité de $nomInvocateur est la dexterité.Cette irrégularité est d'une valeur de $dexterité";

    } elseif ($nomPersonnage == "barferoPossedé") {
        $nomInvocateur = "Barfero";
        $surnomInvocateur = "l'astronome erudit";
        $verdict = "<script> console.log('Perso Barfero Possedé');
        confirm('Barfero possedé par Maleeds est invoquer');</script>";
        $messageAme = "L'âme du guerrier $nomInvocateur, également appeler $surnomInvocateur est invoquée.";
        $statutMental = "Possedé";
        echo "<script> console.log('Equipement de $nomInvocateur')</script>";

        $florinOr = 19+46+20;
        $florinArgent = 8+8;
        $florinCuivre = "0";

        $race = "Lunaréen";
        $metier1 = "Alchimiste";
        $metier2 = "Mage d'ecriture";
        $alignement = "Chaotique / Bon";
        $couleur = "Bleu / Gris";
        $niveau = 2+1;
        $experience = 4+2;
        $age = 810;
        $sexe = "M";
        $poids = 28;
        $taille = "1,95";

        $charisme = 9;
        $force = 5;
        $endurance = 5;
        $dexterité = 7;
        $agilité = 5;
        $intelligence = 8;
        $sagesse = 10;
        $potentiel = 15;
        $initiative = 8;
        $chance = 5;
        $froid = 7;
        $chaleur = 7;
        $maladie = 11;
        $boisson = 7;
        $charme = 7;
        $peur = 7;
        $sommeil = 7;
        $douleur = 7;

        $pdvBonus = -2;
        $pdv = $force + $endurance + $pdvBonus;
        $pdsBonus = 0;
        $pds = $intelligence + $sagesse + $pdsBonus;
        $pdmBonus = 24;
        $pdm = $pds + $potentiel + $pdmBonus - $pdsBonus;

        $irrégularité = "L'irrégularité de $nomInvocateur est la dexterité.Cette irrégularité est d'une valeur de $dexterité";

        

    } elseif ($nomPersonnage == "xanther") {
        $nomInvocateur = "Xanther";
        $surnomInvocateur = "l'eventreur de l'ombre";
        $verdict = "<script> console.log('Perso Xanther');
        confirm('Xanther est invoquer');</script>";
        $messageAme = "L'âme du guerrier $nomInvocateur, également appeler $surnomInvocateur est invoquée.";
        $statutMental = "Normal";
        echo "<script> console.log('Equipement de $nomInvocateur')</script>";

        $florinOr = 61+20;
        $florinArgent = 8;
        $florinCuivre = 0;

        $race = "";
        $metier1 = "Assassin";
        $metier2 = "Arbalétrier";
        $alignement = "Chaotique / Neutre";
        $couleur = "";
        $niveau = 2+1;
        $experience = 4+2;
        $age = 20;
        $sexe = "M";
        $poids = 75;
        $taille = "1,70";

        $charisme = 8+4;
        $force = 8+2;
        $endurance = 6+2;
        $dexterité = 8+4;
        $agilité = 8+1;
        $intelligence = 7;
        $sagesse = 6;
        $potentiel = 7;
        $initiative = 10+6+8;
        $chance = 7;
        $froid = 7+2;
        $chaleur = 7;
        $maladie = 7;
        $boisson = 7;
        $charme = 7;
        $peur = 7;
        $sommeil = 7;
        $douleur = 7;

        $pdvBonus = 2;
        $pdv = $force + $endurance + $pdvBonus;
        $pdsBonus = 4;
        $pds = $intelligence + $sagesse + $pdsBonus;
        $pdmBonus = 0;
        $pdm = $pds + $potentiel + $pdmBonus - $pdsBonus;

        $irrégularité = "L'irrégularité de $nomInvocateur est la dexterité.Cette irrégularité est d'une valeur de $dexterité";

    } elseif ($nomPersonnage == "exyu") {
        $nomInvocateur = "Exyu";
        $surnomInvocateur = "le fée"
        $verdict = "<script> console.log('Perso Exyu');
        confirm('Exyu est invoquer');</script>";
        $messageAme = "L'âme du guerrier $nomInvocateur, également appeler $surnomInvocateur est invoquée.";
        $statutMental = "Normal";
        echo "<script> console.log('Equipement de $nomInvocateur')</script>";

        $florinOr = 102+20;
        $florinArgent = 1;
        $florinCuivre = 0;

        $race = "";
        $metier1 = "";
        $metier2 = "";
        $alignement = "";
        $couleur = "";
        $niveau = 2+1;
        $experience = 4+2;
        $age = "";
        $sexe = "";
        $poids = "";
        $taille = "";

        $charisme = 9+2;
        $force = 7;
        $endurance = 7+4;
        $dexterité = 7;
        $agilité = 7;
        $intelligence = 7+1;
        $sagesse = 6+2;
        $potentiel = 10+7;
        $initiative = 6;
        $chance = 8;
        $froid = 7;
        $chaleur = 7;
        $maladie = 7+2;
        $boisson = 7+2;
        $charme = 7;
        $peur = 7+4;
        $sommeil = 7;
        $douleur = 7+4;

        $pdvBonus = 0;
        $pdv = $force + $endurance + $pdvBonus;
        $pdsBonus = 2;
        $pds = $intelligence + $sagesse + $pdsBonus;
        $pdmBonus = 3;
        $pdm = $pds + $potentiel + $pdmBonus - $pdsBonus;

        $irrégularité = "L'irrégularité de $nomInvocateur est le potentiel.Cette irrégularité est d'une valeur de $potentiel ";


    } elseif ($nomPersonnage == "exyuGargouille") {
        $nomInvocateur = "Exyu";
        $surnomInvocateur = "la Gargouille"
        $verdict = "<script> console.log('Perso Exyu');
        confirm('Exyu est invoquer');</script>";
        $messageAme = "L'âme du guerrier $nomInvocateur, également appeler $surnomInvocateur est invoquée.";
        $statutMental = "Gargouille";
        echo "<script> console.log('Equipement de $nomInvocateur')</script>";

        $florinOr = 102+20;
        $florinArgent = 1;
        $florinCuivre = 0;

        $race = "";
        $metier1 = "";
        $metier2 = "";
        $alignement = "";
        $couleur = "";
        $niveau = 2+1;
        $experience = 4+2;
        $age = "";
        $sexe = "";
        $poids = "";
        $taille = "";

        $charisme = 11;
        $force = 7;
        $endurance = 11+6;
        $dexterité = 7;
        $agilité = 7;
        $intelligence = 8;
        $sagesse = 8+2;
        $potentiel = 17+3;
        $initiative = 6;
        $chance = 8;
        $froid = 7;
        $chaleur = 7;
        $maladie = 20;
        $boisson = 9;
        $charme = 7;
        $peur = 20;
        $sommeil = 7;
        $douleur = 20;

        $pdvBonus = 0;
        $pdv = $force + $endurance + $pdvBonus;
        $pdsBonus = 0;
        $pds = $intelligence + $sagesse + $pdsBonus;
        $pdmBonus = -12;
        $pdm = $pds + $potentiel + $pdmBonus - $pdsBonus;

        $irrégularité = "L'irrégularité de $nomInvocateur est le potentiel. Cette irrégularité est d'une valeur de $potentiel ";


    } else {
    $verdict = "<script> console.log('Perso inconnu');
    confirm('Vous etes inconnu personne ne peux vous invoquer');</script>";
    $messageAme = "L'âme de votre guerrier ne peux pas etre invoquée";

    $florinOr = "0";
    $florinArgent = "0";
    $florinCuivre = "0";

    $race = "0";
    $metier1 = "0";
    $metier2 = "0";
    $alignement = "0";
    $couleur = "0";
    $niveau = "0";
    $experience = "0";
    $age = "0";
    $sexe = "0";
    $poids = "0";
    $taille = "0";

    $charisme = "0";
    $force = "0";
    $endurance = "0";
    $dexterité = "0";
    $agilité = "0";
    $intelligence = "0";
    $sagesse = "0";
    $potentiel = "0";
    $initiative = "0";
    $chance = "0";
    $froid = "0";
    $chaleur = "0";
    $maladie = "0";
    $boisson = "0";
    $charme = "0";
    $peur = "0";
    $sommeil = "0";
    $douleur = "0";

    $pdvBonus = 0;
    $pdv = $force + $endurance + $pdvBonus;
    $pdsBonus = 0;
    $pds = $intelligence + $sagesse + $pdsBonus;
    $pdmBonus = -12;
    $pdm = $pds + $potentiel + $pdmBonus - $pdsBonus;
}
?>