<?php

    // Recuperation du choix de personnage avec methode $_POST
    $nomPersonnage = isset($_POST['nomPersonnage']) ? $_POST['nomPersonnage'] : NULL;
    
    // Importation du fichier qui contient les stats des Personnages
    include('statistiquePersonnageAll.php');
    // Importation du fichier qui contient les competences des Personnages
    include('competence.php');
    // Importation du fichier qui contient les equipements des Personnages
    include('equipement.php');
    // Importation du fichier qui contient les tatouages des personnages
    include('tatouage.php');
    // Importation du fichier qui contient les voies des personnages
    include('voie.php');
    // Importation du fichier qui contient les sorts des Personnages
    include('sort.php');
    // Importation du fichier qui contient l'inventaire des Personnages
    include('inventaire.php');
    // Importation du fichier qui contient l'inventaire collectif du groupe.
    include('inventaireCollectif.php');
    // Affichage d'une pop up alert pour confirmer la selection du Personnages
    echo $verdict;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts by FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">

    <!-- Custom foonts for emoji -->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

    <!-- Custom fonts by Google -->
    <link href="https://fonts.googleapis.com/css?family=Cookie|Courgette|Dancing+Script|Great+Vibes|Kalam|Kaushan+Script|Marck+Script|Merienda|Merriweather|Pacifico|Satisfy"
        rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="../css/creative.css" rel="stylesheet">
    <link href="../css/loader.css" rel="stylesheet">


    <title>Fiche Personnage</title>
</head>

<body id="page-top">
    <div id="load"></div>
    <main>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    <?php echo $nomInvocateur;?></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#Statistique">Statistiques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#competence">Compétences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#equipement">Équipements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#voie">Voie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#sort">Sort</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#inventairePersonnel">Inventaire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#inventaireCollectif">Inventaire Groupe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:history.go(-1)"><i class="fas fa-door-open"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead text-center text-black d-flex">
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <h1 class="text-uppercase">
                            <strong>
                                <?php echo $nomInvocateur; ?></strong>
                        </h1>
                        <hr>
                    </div>
                    <div class="col-lg-12 mx-auto">
                        <p class="text-faded mb-5" id="st"> <?php echo $messageAme;?>.</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#Statistique">Suite</a>
                    </div>
                </div>
            </div>
        </header>

        <section id="Statistique">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto text-center">
                        <h2 class="section-heading">Statistiques</h2>
                        <p class="mb-5">Statistiques du personnage
                            <?php echo $nomInvocateur?> !</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 text-center">
                        <div class="progress font-weight-bold" style="height: 80px;">
                            <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: <?php echo htmlspecialchars($pdv);?>%" aria-valuenow="<?php echo htmlspecialchars($pdv);?>" aria-valuemin="0" aria-valuemax="100">Point <br>de Vie :<br> <?php echo htmlspecialchars($pdv);?></div>
                            <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: <?php echo htmlspecialchars($pds);?>%" aria-valuenow="<?php echo htmlspecialchars($pds);?>" aria-valuemin="0" aria-valuemax="100">Point <br>Spirituel :<br> <?php echo htmlspecialchars($pds);?></div>
                            <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: <?php echo htmlspecialchars($pdm);?>%" aria-valuenow="<?php echo htmlspecialchars($pdm);?>" aria-valuemin="0" aria-valuemax="100">Point <br>de Mana :<br> <?php echo htmlspecialchars($pdm);?></div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <p>
                            <i class="fas fa-coins " style="color:#FFD700"> <?php echo $florinOr;?></i> Florin d'or<br>
                            <i class="fas fa-coins " style="color:#CECECE"> <?php echo $florinArgent?></i> Florin d'argent<br>
                            <i class="fas fa-coins " style="color:#B36700"> <?php echo $florinCuivre;?></i> Florin de cuivre
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <canvas id="myFirstStat" height="450px"></canvas>
                    </div>
                    <div class="col-md-4 text-center">
                        <canvas id="mySecondStat" height="450px"></canvas>
                    </div>
                    <div class="col-md-4 text-center">
                        <canvas id="myThirdStat" height="450px"></canvas>
                    </div>
                </div>
                <p class="text-center">
                    <?php echo $irrégularité; ?>
                </p>
            </div>
        </section>

        <!-- Competence du personnage choisis par l'invocateur -->
        <section id="competence">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <table class="table table-sm table-striped table-dark text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Competences</th>
                                    <th scope="col">Points</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Art de la rue</th>
                                    <td>
                                        <?php echo $artDeLaRue;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Athletisme</th>
                                    <td>
                                        <?php echo $athletisme;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Bibliotheque</th>
                                    <td>
                                        <?php echo $bibliotheque;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Charme</th>
                                    <td>
                                        <?php echo $charme;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Chercher</th>
                                    <td>
                                        <?php echo $chercher;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Conduite</th>
                                    <td>
                                        <?php echo $conduite;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Credit</th>
                                    <td>
                                        <?php echo $credit;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Cuisine</th>
                                    <td>
                                        <?php echo $cuisine;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Diplomatie</th>
                                    <td>
                                        <?php echo $diplomatie;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Discretion</th>
                                    <td>
                                        <?php echo $discretion;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Equitation</th>
                                    <td>
                                        <?php echo $equitation;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Intuition</th>
                                    <td>
                                        <?php echo $intuition;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Maniement</th>
                                    <td>
                                        <?php echo $maniement;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Langue Maternelle</th>
                                    <td>
                                        <?php echo $langueMaternelle;?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4 text-center">
                        <table class="table table-sm table-striped table-dark text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Competences</th>
                                    <th scope="col">Points</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Larcin</th>
                                    <td>
                                        <?php echo $larcin;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Leadership</th>
                                    <td>
                                        <?php echo $leadership;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Légende</th>
                                    <td>
                                        <?php echo $legende;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Medecine</th>
                                    <td>
                                        <?php echo $medecine;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Navigation</th>
                                    <td>
                                        <?php echo $navigation;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Orientation</th>
                                    <td>
                                        <?php echo $orientation;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Portage</th>
                                    <td>
                                        <?php echo $portage;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Pilotage</th>
                                    <td>
                                        <?php echo $pilotage;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Premier Soins</th>
                                    <td>
                                        <?php echo $premierSoins;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Psychologie</th>
                                    <td>
                                        <?php echo $psychologie;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Savoir</th>
                                    <td>
                                        <?php echo $savoir;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Seconde Vue</th>
                                    <td>
                                        <?php echo $secondeVue;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Survie</th>
                                    <td>
                                        <?php echo $survie;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Sprint</th>
                                    <td>
                                        <?php echo $sprint;?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4 text-center">
                        <table class="table table-sm table-striped table-dark text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Competences</th>
                                    <th scope="col">Points</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Traque</th>
                                    <td>
                                        <?php echo $traque;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <?php echo $bonus1Nom;?>
                                    </th>
                                    <td>
                                        <?php echo $bonus1Valeur;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <?php echo $bonus2Nom;?>
                                    </th>
                                    <td>
                                        <?php echo $bonus2Valeur;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <?php echo $bonus3Nom;?>
                                    </th>
                                    <td>
                                        <?php echo $bonus3Valeur;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <?php echo $bonus4Nom;?>
                                    </th>
                                    <td>
                                        <?php echo $bonus4Valeur;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <?php echo $bonus5Nom;?>
                                    </th>
                                    <td>
                                        <?php echo $bonus5Valeur;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <?php echo $bonus6Nom;?>
                                    </th>
                                    <td>
                                        <?php echo $bonus6Valeur;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <?php echo $bonus7Nom;?>
                                    </th>
                                    <td>
                                        <?php echo $bonus7Valeur;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <?php echo $bonus8Nom;?>
                                    </th>
                                    <td>
                                        <?php echo $bonus8Valeur;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <?php echo $bonus9Nom;?>
                                    </th>
                                    <td>
                                        <?php echo $bonus9Valeur;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <?php echo $bonus10Nom;?>
                                    </th>
                                    <td>
                                        <?php echo $bonus10Valeur;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <?php echo $bonus11Nom;?>
                                    </th>
                                    <td>
                                        <?php echo $bonus11Valeur;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <?php echo $bonus12Nom;?>
                                    </th>
                                    <td>
                                        <?php echo $bonus12Valeur;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <?php echo $bonus13Nom;?>
                                    </th>
                                    <td>
                                        <?php echo $bonus13Valeur;?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Equipement du personnage choisis par l'invocateur -->
        <section id="equipement">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto text-center">
                        <h3>Armure</h3>
                        <hr class="my-4">
                        <div class="table-responsive">
                            <table class="table table-sm table-striped table-dark text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">Partie</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Rang</th>
                                        <th scope="col">Matériaux</th>
                                        <th scope="col">Physique</th>
                                        <th scope="col">Magique</th>
                                        <th scope="col">Bonus</th>
                                        <th scope="col">Enchantement</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Tete</th>
                                        <td>
                                            <?php echo $armureTeteNom;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTeteRang;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTeteMatiere;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTetePhysique;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTeteMagique;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTeteBonus;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTeteEnchantement;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Epaule</th>
                                        <td>
                                            <?php echo $armureEpaulesNom;?>
                                        </td>
                                        <td>
                                            <?php echo $armureEpaulesRang;?>
                                        </td>
                                        <td>
                                            <?php echo $armureEpaulesMatiere;?>
                                        </td>
                                        <td>
                                            <?php echo $armureEpaulesPhysique;?>
                                        </td>
                                        <td>
                                            <?php echo $armureEpaulesMagique;?>
                                        </td>
                                        <td>
                                            <?php echo $armureEpaulesBonus;?>
                                        </td>
                                        <td>
                                            <?php echo $armureEpaulesEnchantement;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Torse</th>
                                        <td>
                                            <?php echo $armureTorseNom;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTorseRang;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTorseMatiere;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTorsePhysique;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTorseMagique;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTorseBonus;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTorseEnchantement;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Bras</th>
                                        <td>
                                            <?php echo $armureBrasNom;?>
                                        </td>
                                        <td>
                                            <?php echo $armureBrasRang;?>
                                        </td>
                                        <td>
                                            <?php echo $armureBrasMatiere;?>
                                        </td>
                                        <td>
                                            <?php echo $armureBrasPhysique;?>
                                        </td>
                                        <td>
                                            <?php echo $armureBrasMagique;?>
                                        </td>
                                        <td>
                                            <?php echo $armureBrasBonus;?>
                                        </td>
                                        <td>
                                            <?php echo $armureBrasEnchantement;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tassette</th>
                                        <td>
                                            <?php echo $armureTassetteNom;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTassetteRang;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTassetteMatiere;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTassettePhysique;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTassetteMagique;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTassetteBonus;?>
                                        </td>
                                        <td>
                                            <?php echo $armureTassetteEnchantement;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jambes</th>
                                        <td>
                                            <?php echo $armureJambesNom;?>
                                        </td>
                                        <td>
                                            <?php echo $armureJambesRang;?>
                                        </td>
                                        <td>
                                            <?php echo $armureJambesMatiere;?>
                                        </td>
                                        <td>
                                            <?php echo $armureJambesPhysique;?>
                                        </td>
                                        <td>
                                            <?php echo $armureJambesMagique;?>
                                        </td>
                                        <td>
                                            <?php echo $armureJambesBonus;?>
                                        </td>
                                        <td>
                                            <?php echo $armureJambesEnchantement;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pieds</th>
                                        <td>
                                            <?php echo $armurePiedsNom;?>
                                        </td>
                                        <td>
                                            <?php echo $armurePiedsRang;?>
                                        </td>
                                        <td>
                                            <?php echo $armurePiedsMatiere;?>
                                        </td>
                                        <td>
                                            <?php echo $armurePiedsPhysique;?>
                                        </td>
                                        <td>
                                            <?php echo $armurePiedsMagique;?>
                                        </td>
                                        <td>
                                            <?php echo $armurePiedsBonus;?>
                                        </td>
                                        <td>
                                            <?php echo $armurePiedsEnchantement;?>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4">
                                        Armure Physique Total <?php echo round($armurePhysiqueComplete); ?>
                                        </td>
                                        <td colspan="4">
                                        Armure Magique Total <?php echo round($armureMagiqueComplete); ?>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mx-auto text-center">
                        <h3>Arme</h3>
                        <div class="table-responsive">
                            <table class="table table-sm table-striped table-dark text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Rang</th>
                                        <th scope="col">Matériaux</th>
                                        <th scope="col">Physique</th>
                                        <th scope="col">Magique</th>
                                        <th scope="col">OverTime</th>
                                        <th scope="col">Distance<br>(Mètre)</th>
                                        <th scope="col">Enchantement</th>
                                        <th scope="col">Description</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <?php echo $arme1Nom;?>
                                        </td>
                                        <td>
                                            <?php echo $arme1Rang;?>
                                        </td>
                                        <td>
                                            <?php echo $arme1Materiaux;?>
                                        </td>
                                        <td>
                                            <?php echo $arme1DegatPhysique;?>
                                        </td>
                                        <td>
                                            <?php echo $arme1DegatMagique;?>
                                        </td>
                                        <td>
                                            <?php echo $arme1DegatOverTime;?>
                                        </td>
                                        <td>
                                            <?php echo $arme1Portee;?>
                                        </td>
                                        <td>
                                            <?php echo $arme1Enchantement;?>
                                        </td>
                                        <td>
                                            <?php echo $arme1Description;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>
                                            <?php echo $arme2Nom;?>
                                        </td>
                                        <td>
                                            <?php echo $arme2Rang;?>
                                        </td>
                                        <td>
                                            <?php echo $arme2Materiaux;?>
                                        </td>
                                        <td>
                                            <?php echo $arme2DegatPhysique;?>
                                        </td>
                                        <td>
                                            <?php echo $arme2DegatMagique;?>
                                        </td>
                                        <td>
                                            <?php echo $arme2DegatOverTime;?>
                                        </td>
                                        <td>
                                            <?php echo $arme2Portee;?>
                                        </td>
                                        <td>
                                            <?php echo $arme2Enchantement;?>
                                        </td>
                                        <td>
                                            <?php echo $arme2Description;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>
                                            <?php echo $arme3Nom;?>
                                        </td>
                                        <td>
                                            <?php echo $arme3Rang;?>
                                        </td>
                                        <td>
                                            <?php echo $arme3Materiaux;?>
                                        </td>
                                        <td>
                                            <?php echo $arme3DegatPhysique;?>
                                        </td>
                                        <td>
                                            <?php echo $arme3DegatMagique;?>
                                        </td>
                                        <td>
                                            <?php echo $arme3DegatOverTime;?>
                                        </td>
                                        <td>
                                            <?php echo $arme3Portee;?>
                                        </td>
                                        <td>
                                            <?php echo $arme3Enchantement;?>
                                        </td>
                                        <td>
                                            <?php echo $arme3Description;?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto text-center">
                        <h2 class="section-heading">Tatouage</h2>
                        <hr class="my-4">
                        <div class="table-responsive">
                            <table class="table table-sm table-striped table-dark text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Rang</th>
                                        <th scope="col">Quantité</th>
                                        <th scope="col">Taile</th>
                                        <th scope="col">Emplacement</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Effet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php echo $tatouage1Nom;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage1Rang;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage1Quantité;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage1Taille;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage1Emplacement;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage1Type;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage1Effet;?>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>
                                            <?php echo $tatouage2Nom;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage2Rang;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage2Quantité;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage2Taille;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage2Emplacement;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage2Type;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage2Effet;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $tatouage3Nom;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage3Rang;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage3Quantité;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage3Taille;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage3Emplacement;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage3Type;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage3Effet;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $tatouage4Nom;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage4Rang;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage4Quantité;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage4Taille;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage4Emplacement;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage4Type;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage4Effet;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $tatouage5Nom;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage5Rang;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage5Quantité;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage5Taille;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage5Emplacement;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage5Type;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage5Effet;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $tatouage6Nom;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage6Rang;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage6Quantité;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage6Taille;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage6Emplacement;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage6Type;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage6Effet;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $tatouage7Nom;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage7Rang;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage7Quantité;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage7Taille;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage7Emplacement;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage7Type;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage7Effet;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $tatouage8Nom;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage8Rang;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage8Quantité;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage8Taille;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage8Emplacement;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage8Type;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage8Effet;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $tatouage9Nom;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage9Rang;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage9Quantité;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage9Taille;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage9Emplacement;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage9Type;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage9Effet;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $tatouage10Nom;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage10Rang;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage10Quantité;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage10Taille;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage10Emplacement;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage10Type;?>
                                        </td>
                                        <td>
                                            <?php echo $tatouage10Effet;?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="voie">
            <div class="container">
                <div class="'row'">
                    <div class="col-lg-12 mx-auto text-center">
                        <h2 class="section-heading">Voie</h2>
                        <hr class="my-4">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <div class="table-responsive">
                                    <table class="table table-sm table-striped table-dark text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">Voie</th>
                                                <th scope="col">Niveau</th>
                                                <th scope="col">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" rowspan="3"><?php echo $voie1Nom;?></th>
                                                <td><?php echo $voie1Niveau1;?></td>
                                                <td><?php echo $voie1DescriptionNiveau1;?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $voie1Niveau2;?></td>
                                                <td><?php echo $voie1DescriptionNiveau2;?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $voie1Niveau3;?></td>
                                                <td><?php echo $voie1DescriptionNiveau3;?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="table-responsive">
                                    <table class="table table-sm table-striped table-dark text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">Voie</th>
                                                <th scope="col">Niveau</th>
                                                <th scope="col">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <th scope="row" rowspan="3"><?php echo $voie2Nom;?></th>
                                                <td><?php echo $voie2Niveau1;?></td>
                                                <td><?php echo $voie2DescriptionNiveau1;?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $voie2Niveau2;?></td>
                                                <td><?php echo $voie2DescriptionNiveau2;?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $voie2Niveau3;?></td>
                                                <td><?php echo $voie2DescriptionNiveau3;?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="table-responsive">
                                    <table class="table table-sm table-striped table-dark text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">Voie</th>
                                                <th scope="col">Niveau</th>
                                                <th scope="col">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" rowspan="3"><?php echo $voie3Nom;?></th>
                                                <td><?php echo $voie3Niveau1;?></td>
                                                <td><?php echo $voie3DescriptionNiveau1;?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $voie3Niveau2;?></td>
                                                <td><?php echo $voie3DescriptionNiveau2;?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $voie3Niveau3;?></td>
                                                <td><?php echo $voie3DescriptionNiveau3;?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="table-responsive">
                                    <table class="table table-sm table-striped table-dark text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">Voie</th>
                                                <th scope="col">Niveau</th>
                                                <th scope="col">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" rowspan="3"><?php echo $voie4Nom;?></th>
                                                <td><?php echo $voie4Niveau1;?></td>
                                                <td><?php echo $voie4DescriptionNiveau1;?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $voie4Niveau2;?></td>
                                                <td><?php echo $voie4DescriptionNiveau2;?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $voie4Niveau3;?></td>
                                                <td><?php echo $voie4DescriptionNiveau3;?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="table-responsive">
                                    <table class="table table-sm table-striped table-dark text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">Voie</th>
                                                <th scope="col">Niveau</th>
                                                <th scope="col">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" rowspan="3"><?php echo $voie5Nom;?></th>
                                                <td><?php echo $voie5Niveau1;?></td>
                                                <td><?php echo $voie5DescriptionNiveau1;?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $voie5Niveau2;?></td>
                                                <td><?php echo $voie5DescriptionNiveau2;?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $voie5Niveau3;?></td>
                                                <td><?php echo $voie5DescriptionNiveau3;?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="table-responsive">
                                    <table class="table table-sm table-striped table-dark text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">Voie</th>
                                                <th scope="col">Niveau</th>
                                                <th scope="col">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" rowspan="3"><?php echo $voie6Nom;?></th>
                                                <td><?php echo $voie6Niveau1;?></td>
                                                <td><?php echo $voie6DescriptionNiveau1;?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $voie6Niveau2;?></td>
                                                <td><?php echo $voie6DescriptionNiveau2;?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $voie6Niveau3;?></td>
                                                <td><?php echo $voie6DescriptionNiveau3;?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sort du personnage choisi par l'invocateur -->
        <section id="sort">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto text-center">
                        <h2 class="section-heading">Sort</h2>
                        <hr class="my-4">
                        <div class="table-responsive">
                        <table class="table table-sm table-striped table-dark text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Nom du sort</th>
                                    <th scope="col">Niveau du sort</th>
                                    <th scope="col">Niveau de Maitrise</th>
                                    <th scope="col">Cout</th>
                                    <th scope="col">Degat</th>
                                    <th scope="col">Durée</th>
                                    <th scope="col">Portée (Metre)</th>
                                    <th scope="col">Effet<br>Secondaire</th>
                                    <th scope="col">Description du sort</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php echo $sort1Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $sort1Point;?>
                                    </td>
                                    <td>
                                        <?php echo $sort1Maitrise;?>
                                    </td>
                                    <td>
                                        <?php echo $sort1Cout;?>
                                    </td>
                                    <td>
                                        <?php echo $sort1Degat;?>
                                    </td>
                                    <td>
                                        <?php echo $sort1Duree;?>
                                    </td>
                                    <td>
                                        <?php echo $sort1Portée;?>
                                    </td>
                                    <td>
                                        <?php echo $sort1EffectSecondaire;?>
                                    </td>
                                    <td>
                                        <?php echo $sort1Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $sort2Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $sort2Point;?>
                                    </td>
                                    <td>
                                        <?php echo $sort2Maitrise;?>
                                    </td>
                                    <td>
                                        <?php echo $sort2Cout;?>
                                    </td>
                                    <td>
                                        <?php echo $sort2Degat;?>
                                    </td>
                                    <td>
                                        <?php echo $sort2Duree;?>
                                    </td>
                                    <td>
                                        <?php echo $sort2Portée;?>
                                    </td>
                                    <td>
                                        <?php echo $sort2EffectSecondaire;?>
                                    </td>
                                    <td>
                                        <?php echo $sort2Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $sort3Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $sort3Point;?>
                                    </td>
                                    <td>
                                        <?php echo $sort3Maitrise;?>
                                    </td>
                                    <td>
                                        <?php echo $sort3Cout;?>
                                    </td>
                                    <td>
                                        <?php echo $sort3Degat;?>
                                    </td>
                                    <td>
                                        <?php echo $sort3Duree;?>
                                    </td>
                                    <td>
                                        <?php echo $sort3Portée;?>
                                    </td>
                                    <td>
                                        <?php echo $sort3EffectSecondaire;?>
                                    </td>
                                    <td>
                                        <?php echo $sort3Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $sort4Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $sort4Point;?>
                                    </td>
                                    <td>
                                        <?php echo $sort4Maitrise;?>
                                    </td>
                                    <td>
                                        <?php echo $sort4Cout;?>
                                    </td>
                                    <td>
                                        <?php echo $sort4Degat;?>
                                    </td>
                                    <td>
                                        <?php echo $sort4Duree;?>
                                    </td>
                                    <td>
                                        <?php echo $sort4Portée;?>
                                    </td>
                                    <td>
                                        <?php echo $sort4EffectSecondaire;?>
                                    </td>
                                    <td>
                                        <?php echo $sort4Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $sort5Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $sort5Point;?>
                                    </td>
                                    <td>
                                        <?php echo $sort5Maitrise;?>
                                    </td>
                                    <td>
                                        <?php echo $sort5Cout;?>
                                    </td>
                                    <td>
                                        <?php echo $sort5Degat;?>
                                    </td>
                                    <td>
                                        <?php echo $sort5Duree;?>
                                    </td>
                                    <td>
                                        <?php echo $sort5Portée;?>
                                    </td>
                                    <td>
                                        <?php echo $sort5EffectSecondaire;?>
                                    </td>
                                    <td>
                                        <?php echo $sort5Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $sort6Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $sort6Point;?>
                                    </td>
                                    <td>
                                        <?php echo $sort6Maitrise;?>
                                    </td>
                                    <td>
                                        <?php echo $sort6Cout;?>
                                    </td>
                                    <td>
                                        <?php echo $sort6Degat;?>
                                    </td>
                                    <td>
                                        <?php echo $sort6Duree;?>
                                    </td>
                                    <td>
                                        <?php echo $sort6Portée;?>
                                    </td>
                                    <td>
                                        <?php echo $sort6EffectSecondaire;?>
                                    </td>
                                    <td>
                                        <?php echo $sort6Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $sort7Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $sort7Point;?>
                                    </td>
                                    <td>
                                        <?php echo $sort7Maitrise;?>
                                    </td>
                                    <td>
                                        <?php echo $sort7Cout;?>
                                    </td>
                                    <td>
                                        <?php echo $sort7Degat;?>
                                    </td>
                                    <td>
                                        <?php echo $sort7Duree;?>
                                    </td>
                                    <td>
                                        <?php echo $sort7Portée;?>
                                    </td>
                                    <td>
                                        <?php echo $sort7EffectSecondaire;?>
                                    </td>
                                    <td>
                                        <?php echo $sort7Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $sort8Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $sort8Point;?>
                                    </td>
                                    <td>
                                        <?php echo $sort8Maitrise;?>
                                    </td>
                                    <td>
                                        <?php echo $sort8Cout;?>
                                    </td>
                                    <td>
                                        <?php echo $sort8Degat;?>
                                    </td>
                                    <td>
                                        <?php echo $sort8Duree;?>
                                    </td>
                                    <td>
                                        <?php echo $sort8Portée;?>
                                    </td>
                                    <td>
                                        <?php echo $sort8EffectSecondaire;?>
                                    </td>
                                    <td>
                                        <?php echo $sort8Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $sort9Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $sort9Point;?>
                                    </td>
                                    <td>
                                        <?php echo $sort9Maitrise;?>
                                    </td>
                                    <td>
                                        <?php echo $sort9Cout;?>
                                    </td>
                                    <td>
                                        <?php echo $sort9Degat;?>
                                    </td>
                                    <td>
                                        <?php echo $sort9Duree;?>
                                    </td>
                                    <td>
                                        <?php echo $sort9Portée;?>
                                    </td>
                                    <td>
                                        <?php echo $sort9EffectSecondaire;?>
                                    </td>
                                    <td>
                                        <?php echo $sort9Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $sort10Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $sort10Point;?>
                                    </td>
                                    <td>
                                        <?php echo $sort10Maitrise;?>
                                    </td>
                                    <td>
                                        <?php echo $sort10Cout;?>
                                    </td>
                                    <td>
                                        <?php echo $sort10Degat;?>
                                    </td>
                                    <td>
                                        <?php echo $sort10Duree;?>
                                    </td>
                                    <td>
                                        <?php echo $sort10Portée;?>
                                    </td>
                                    <td>
                                        <?php echo $sort10EffectSecondaire;?>
                                    </td>
                                    <td>
                                        <?php echo $sort10Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $sort11Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $sort11Point;?>
                                    </td>
                                    <td>
                                        <?php echo $sort11Maitrise;?>
                                    </td>
                                    <td>
                                        <?php echo $sort11Cout;?>
                                    </td>
                                    <td>
                                        <?php echo $sort11Degat;?>
                                    </td>
                                    <td>
                                        <?php echo $sort11Duree;?>
                                    </td>
                                    <td>
                                        <?php echo $sort11Portée;?>
                                    </td>
                                    <td>
                                        <?php echo $sort11EffectSecondaire;?>
                                    </td>
                                    <td>
                                        <?php echo $sort11Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $sort12Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $sort12Point;?>
                                    </td>
                                    <td>
                                        <?php echo $sort12Maitrise;?>
                                    </td>
                                    <td>
                                        <?php echo $sort12Cout;?>
                                    </td>
                                    <td>
                                        <?php echo $sort12Degat;?>
                                    </td>
                                    <td>
                                        <?php echo $sort12Duree;?>
                                    </td>
                                    <td>
                                        <?php echo $sort12Portée;?>
                                    </td>
                                    <td>
                                        <?php echo $sort12EffectSecondaire;?>
                                    </td>
                                    <td>
                                        <?php echo $sort12Description;?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Inventaire personnelle du personnage choisi par l'invocateur -->
        <section id="inventairePersonnel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto text-center">
                        <h2 class="section-heading">Inventaire</h2>
                        <hr class="my-4">
                        <table class="table table-sm table-striped table-dark text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Quantité</th>
                                    <th scope="col">Prix<br>d'achat</th>
                                    <th scope="col">Prix de<br>revente</th>
                                    <th scope="col">Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php echo $item1Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $item1Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $item1Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $item1PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $item1Type;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $item2Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $item2Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $item2Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $item2PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $item2Type;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $item3Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $item3Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $item3Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $item3PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $item3Type;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $item4Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $item4Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $item4Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $item4PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $item4Type;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $item5Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $item5Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $item5Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $item5PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $item5Type;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $item6Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $item6Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $item6Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $item6PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $item6Type;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $item7Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $item7Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $item7Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $item7PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $item7Type;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $item8Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $item8Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $item8Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $item8PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $item8Type;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $item9Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $item9Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $item9Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $item9PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $item9Type;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $item10Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $item10Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $item10Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $item10PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $item10Type;?>
                                    </td>
                                </tr>
                            </tbody>
                        </table><br>
                    </div>
                </div>
            </div>
        </section>

        <!-- Inventaire commun au aventurier de Utopia -->
        <section id="inventaireCollectif">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto text-center">
                        <h2 class="section-heading">Inventaire Collectif</h2>
                        <hr class="my-4">
                        <div class="table-responsive">
                        <table class="table table-sm table-striped table-dark text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Quantité</th>
                                    <th scope="col">Prix<br>d'achat</th>
                                    <th scope="col">Prix de<br>revente</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif1Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif1Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif1Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif1PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif1Type;?>
                                    </td>

                                    <td>
                                        <?php echo $itemCollectif1Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif2Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif2Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif2Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif2PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif2Type;?>
                                    </td>

                                    <td>
                                        <?php echo $itemCollectif2Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif3Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif3Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif3Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif3PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif3Type;?>
                                    </td>

                                    <td>
                                        <?php echo $itemCollectif3Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif4Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif4Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif4Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif4PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif4Type;?>
                                    </td>

                                    <td>
                                        <?php echo $itemCollectif4Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif5Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif5Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif5Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif5PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif5Type;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif5Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif6Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif6Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif6Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif6PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif6Type;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif6Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif7Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif7Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif7Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif7PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif7Type;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif7Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif8Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif8Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif8Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif8PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif8Type;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif8Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif9Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif9Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif9Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif9PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif9Type;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif9Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif10Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif10Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif10Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif10PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif10Type;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif10Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif11Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif11Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif11Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif11PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif11Type;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif11Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif12Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif12Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif12Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif12PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif12Type;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif12Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif13Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif13Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif13Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif13PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif13Type;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif13Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif14Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif14Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif14Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif14PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif14Type;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif14Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif15Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif15Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif15Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif15PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif15Type;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif15Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif16Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif16Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif16Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif16PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif16Type;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif16Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif17Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif17Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif17Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif17PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif17Type;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif17Description;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $itemCollectif18Nom;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif18Quantité;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif18Prix;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif18PrixRevente?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif18Type;?>
                                    </td>
                                    <td>
                                        <?php echo $itemCollectif18Description;?>
                                    </td>
                                </tr>
                            </tbody>
                        </table></div><br>
                        <p>
                            Florin d'or :
                            <?php echo $CollectifOr;?> <i class="fas fa-coins" style="color:#FFD700"></i><br>
                            Florin d'argent :
                            <?php echo $CollectifArgent?> <i class="fas fa-coins" style="color:#CECECE"></i><br>
                            Florin de cuivre :
                            <?php echo $CollectifCuivre;?> <i class="fas fa-coins" style="color:#B36700"></i>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="statetoile">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <canvas id="myFirstStat" height="450px"></canvas>
                    </div>
                    <div class="col-md-4 text-center">
                        <canvas id="mySecondStat" height="450px"></canvas>
                    </div>
                    <div class="col-md-4 text-center">
                        <canvas id="myThirdStat" height="450px"></canvas>
                    </div>
                </div>
            </div>
        </section>



    </main>

   
    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scipts for konami Code -->
    <script src="https://rawgit.com/Haeresis/konami-code-js/master/src/konami-code.js"></script>
    <script>
        // Création d'un HTMLScriptElement.
        var script = document.createElement("script"),
            // Référence sur le HTMLBodyElement.
            body = document.getElementsByTagName("body")[0],
            // Création d'un interrupteur activé/désactivé.
            toggle = false;
        // Notre script sera de type JavaScript
        script.type = "text/javascript";
        // Ce code s'exécutera quand la `src`
        // de notre HTMLScriptElement sera rempli
        // et quand le HTMLScriptElement sera injecté dans le DOM.
        script.addEventListener("load", function () {
            // Création d'un écouteur de Konami Code.
            new KonamiCode(function () {
                // Surprise ou retour à la normal.
                if (toggle) {
                    toggle = false;
                    body.style = "overflow-x: hidden;transition: transform 2s ease;transform: rotate(0deg)";
                } else {
                    toggle = true;
                    body.style = "overflow-x: hidden;transition: transform 2s ease;transform: rotate(180deg)";
                }
            });
        });
        // Attribution d'un fichier et injection de HTMLScriptElement dans le DOM.
        script.src = "https://cdn.rawgit.com/Haeresis/konami-code-js/master/src/konami-code.js";
        body.appendChild(script);
    </script>

    <!-- Custom scripts for this template -->
    <script src="../js/creative.min.js"></script>

    <!-- Code pour bubble loading -->
    <!-- <script>
        document.querySelector('main').style.display = 'none';
        document.getElementById('load').classList.add('spinner')

        setTimeout(() => {
            document.getElementById('load').classList.remove('spinner')
            document.querySelector('main').style.display = 'block';
        }, 2000);
    </script> -->
    
    <!-- Chart.js -->
    <script src="../js/Chart.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script> -->
     <script>
        var ctx = document.getElementById("myFirstStat").getContext('2d');
        var myFirstStat = new Chart(ctx, {
            // The type of chart we want to create
            type: 'radar',
            // The data for our dataset
            data: {
                labels: ["Charisme", "Force", "Endurance", "Dextérité", "Agilité", "Intelligence"],
                datasets: [{
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [<?php echo htmlspecialchars($charisme);?>, <?php echo htmlspecialchars($force);?>, <?php echo htmlspecialchars($endurance);?>, <?php echo htmlspecialchars($dexterité);?>, <?php echo htmlspecialchars($agilité);?>, <?php echo htmlspecialchars($intelligence);?>],
                }]
            },
            // Configuration options go here
            options: {
                legend: {
                    display: false,
                },
                scale: {
                    ticks: {
                    min: 0,
                }
            }
            }
        });
        var ctx = document.getElementById("mySecondStat").getContext('2d');
        var mySecondStat = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: ["Sagesse", "Potentiel", "Initiative", "Chance", "Froid", "Chaleur"],
                datasets: [{
                    backgroundColor: 'rgba(55, 220, 0, 0.2)',
                    borderColor: 'rgb(55, 220, 0)',
                    data: [<?php echo htmlspecialchars($sagesse);?>, <?php echo htmlspecialchars($potentiel);?>, <?php echo htmlspecialchars($initiative);?>, <?php echo htmlspecialchars($chance);?>, <?php echo htmlspecialchars($froid);?>, <?php echo htmlspecialchars($chaleur);?>],
                }]
            },
            // Configuration options go here
            options: {
                legend: {
                    display: false,
                },
                scale: {
                    ticks: {
                    min: 0,
                }
            }
            }
        });
        var ctx = document.getElementById("myThirdStat").getContext('2d');
        var myThirdStat = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: ["Maladie", "Boisson", "Charme", "Peur", "Sommeil", "Douleur"],
                datasets: [{
                    backgroundColor: 'rgba(0, 164, 219, 0.2)',
                    borderColor: 'rgb(0, 164, 219)',
                    data: [<?php echo htmlspecialchars($maladie);?>, <?php echo htmlspecialchars($boisson);?>, <?php echo htmlspecialchars($charme);?>, <?php echo htmlspecialchars($peur);?>, <?php echo htmlspecialchars($sommeil);?>, <?php echo htmlspecialchars($douleur);?>],
                }]
            },
            // Configuration options go here
            options: {
                legend: {
                    display: false,
                },
                scale: {
                    ticks: {
                    min: 0,
                }
            }
        }
    });
    </script>
</body>

</html>