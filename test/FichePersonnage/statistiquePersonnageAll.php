<?php
    if ($nomPersonnage == "orochi") {        
        $nomInvocateur = "Orochi";
        $surnomInvocateur = "l'Éxilé";
        $verdict = "<script>confirm('Orochi est invoquer');</script>";
        $messageAme = "L'âme du guerrier $nomInvocateur, également appeler $surnomInvocateur est invoquée.";
        echo "<script> console.log('Equipement de $nomInvocateur')</script>";

        $florinOr = 93;
        $florinArgent = 0;
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
        $taille = 2.00;

        $charisme = 8;
        $force = 18+5;
        $endurance = 16+5;
        $dexterité = 12+4;
        $agilité = 12+2;
        $intelligence = 11;
        $sagesse = 14+1;
        $potentiel = 11;
        $initiative = 15+2;
        $chance = 8;
        $froid = 7;
        $chaleur = 7+4;
        $maladie = 7+4;
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


        $florinOr = 101;
        $florinArgent = 0;
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

        $charisme = 8;
        $force = 23+12;
        $endurance = 21+11;
        $dexterité = 16;
        $agilité = 14;
        $intelligence = 11;
        $sagesse = 15;
        $potentiel = 11;
        $initiative = 17;
        $chance = 8;
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

        $florinOr = 130;
        $florinArgent = 0;
        $florinCuivre = 7;

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

        $charisme = 11;
        $force = 20+2;
        $endurance = 15;
        $dexterité = 11+5;
        $agilité = 16+1;
        $intelligence = 13+4;
        $sagesse = 11;
        $potentiel = 0;
        $initiative = 9+3;
        $chance = 10;
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

        $pdm = $pdm - $pdm;


        $irrégularité = "L'irrégularité de $nomInvocateur est la dexterité.Cette irrégularité est d'une valeur de $dexterité";


    } elseif ($nomPersonnage == "barfero") {
        $nomInvocateur = "Barfero";
        $surnomInvocateur = "l'astronome erudit";
        $verdict = "<script>confirm('Barfero est invoquer');</script>";
        $messageAme = "L'âme du guerrier $nomInvocateur, également appeler $surnomInvocateur est invoquée.";
        $statutMental = "Normal";
        echo "<script> console.log('Equipement de $nomInvocateur')</script>";

        $florinOr = 47-32;
        $florinArgent = 16-7;
        $florinCuivre = 0;

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

        $charisme = 19;
        $force = 6;
        $endurance = 14;
        $dexterité = 10+2;
        $agilité = 7;
        $intelligence = 17;
        $sagesse = 18+1;
        $potentiel = 19+1;
        $initiative = 13;
        $chance = 11;
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
        $pdsBonus = -0;
        $pds = $intelligence + $sagesse + $pdsBonus;
        $pdmBonus = 24;
        $pdm = $pds + $potentiel + $pdmBonus - $pdsBonus;

        $pds = $pds - $pds;

        $irrégularité = "L'irrégularité de $nomInvocateur est la dexterité.Cette irrégularité est d'une valeur de $dexterité";

    } elseif ($nomPersonnage == "barferoPossedé") {
        $nomInvocateur = "Barfero";
        $surnomInvocateur = "l'astronome erudit";
        $verdict = "<script> console.log('Perso Barfero Possedé');
        confirm('Barfero possedé par Maleeds est invoquer');</script>";
        $messageAme = "L'âme du guerrier $nomInvocateur, également appeler $surnomInvocateur est invoquée.";
        $statutMental = "Possedé";
        echo "<script> console.log('Equipement de $nomInvocateur')</script>";

        $florinOr = 47;
        $florinArgent = 16-7;
        $florinCuivre = 0;

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

        $charisme = 19;
        $force = 6;
        $endurance = 14;
        $dexterité = 10+2;
        $agilité = 7;
        $intelligence = 17;
        $sagesse = 18+1;
        $potentiel = 19+1;
        $initiative = 13;
        $chance = 11;
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
        $pdsBonus = -0;
        $pds = $intelligence + $sagesse + $pdsBonus;
        $pdmBonus = 24;
        $pdm = $pds + $potentiel + $pdmBonus - $pdsBonus;

        $pds = $pds - $pds;

        $irrégularité = "L'irrégularité de $nomInvocateur est la dexterité.Cette irrégularité est d'une valeur de $dexterité";

        

    } elseif ($nomPersonnage == "xanther") {
        $nomInvocateur = "Xanther";
        $surnomInvocateur = "l'eventreur de l'ombre";
        $verdict = "<script> console.log('Perso Xanther');
        confirm('Xanther est invoquer');</script>";
        $messageAme = "L'âme du guerrier $nomInvocateur, également appeler $surnomInvocateur est invoquée.";
        $statutMental = "Normal";
        echo "<script> console.log('Equipement de $nomInvocateur')</script>";

        $florinOr = 81;
        $florinArgent = 8-7;
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

        $charisme = 10+4;
        $force = 13+2;
        $endurance = 12+9;
        $dexterité = 11+5;
        $agilité = 17+1;
        $intelligence = 13;
        $sagesse = 13;
        $potentiel = 15;
        $initiative = 20+6+13;
        $chance = 12;
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
        $surnomInvocateur = "le fée";
        $verdict = "<script> console.log('Perso Exyu');
        confirm('Exyu est invoquer');</script>";
        $messageAme = "L'âme du guerrier $nomInvocateur, également appeler $surnomInvocateur est invoquée.";
        $statutMental = "Normal";
        echo "<script> console.log('Equipement de $nomInvocateur')</script>";

        $florinOr = 163;
        $florinArgent = 5;
        $florinCuivre = 3;

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

        $charisme = 18+2;
        $force = 14;
        $endurance = 14+4;
        $dexterité = 9;
        $agilité = 14;
        $intelligence = 16+1;
        $sagesse = 14+2;
        $potentiel = 18+8;
        $initiative = 9+1;
        $chance = 11;
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
        $surnomInvocateur = "la Gargouille";
        $verdict = "<script> console.log('Perso Exyu');
        confirm('Exyu est invoquer');</script>";
        $messageAme = "L'âme du guerrier $nomInvocateur, également appeler $surnomInvocateur est invoquée.";
        $statutMental = "Gargouille";
        echo "<script> console.log('Equipement de $nomInvocateur')</script>";

        $florinOr = 163;
        $florinArgent = 5;
        $florinCuivre = 3;

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

        $charisme = 20;
        $force = 14;
        $endurance = 18+6;
        $dexterité = 9;
        $agilité = 14;
        $intelligence = 17;
        $sagesse = 16+2;
        $potentiel = 26+3;
        $initiative = 10;
        $chance = 11;
        $froid = 7;
        $chaleur = 7;
        $maladie = 9+20;
        $boisson = 9;
        $charme = 7;
        $peur = 11+20;
        $sommeil = 7;
        $douleur = 11+20;

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