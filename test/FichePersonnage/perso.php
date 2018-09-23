<?php

    // Recuperation du choix de personnage avec methode $_POST
    $nomPersonnage = isset($_POST['nomPersonnage']) ? $_POST['nomPersonnage'] : NULL;
    
    // Importation du fichier qui contient les stats des Personnages
    include('statistiquePersonnageAll.php');
    // Importation du fichier qui contient les competences des Personnages
    include('competence.php');
    // Importation du fichier qui contient les equipements des Personnages
    include('equipement.php');
    // Importation du fichir qui contient les sorts des Personnages
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
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Mountia</a>
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
                            <a class="nav-link js-scroll-trigger" href="#sort">Sort</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#inventairePersonnel">Inventaire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#inventaireCollectif">Inventaire Groupe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:history.go(-1)">Retour</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead text-center text-black d-flex">
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h1 class="text-uppercase">
                            <strong>
                                <?php echo $nomInvocateur; ?></strong>
                        </h1>
                        <hr>
                    </div>
                    <div class="col-lg-10 mx-auto">
                        <p class="text-faded mb-5" id="st">
                            <?php echo $messageAme;?>.</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#Statistique">Suite</a>
                    </div>
                </div>
            </div>
        </header>

        <section id="Statistique">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto text-center">
                        <h2 class="section-heading">Statistiques</h2>
                        <p class="mb-5">Statistiques du personnage
                            <?php echo $nomInvocateur?> !</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 text-left">
                        <p>
                            Point de vie :
                            <?php echo $pdv;?><i class="em em-heart"></i><br>
                            Point Spirituel :
                            <?php echo $pds;?><i class="em em-green_heart"></i><br>
                            Point de mana :
                            <?php echo $pdm;?><i class="em em-blue_heart"></i>

                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%"
                                aria-valuenow="<?php echo $pdv;?>" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div><br>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%"
                                aria-valuenow="<?php echo $pdv;?>" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div><br>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 100%"
                                aria-valuenow="<?php echo $pdv;?>" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-right">
                        <p>
                            Florin d'or :
                            <?php echo $florinOr;?> <i class="fas fa-coins" style="color:#FFD700"></i><br>
                            Florin d'argent :
                            <?php echo $florinArgent?> <i class="fas fa-coins" style="color:#CECECE"></i><br>
                            Florin de cuivre :
                            <?php echo $florinCuivre;?> <i class="fas fa-coins" style="color:#B36700"></i>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <p>
                            Charisme :
                            <?php echo $charisme;?><br>
                            Force :
                            <?php echo $force;?> <i class="em em-muscle"></i><br>
                            Endurance :
                            <?php echo $endurance;?><br>
                            Dexterité :
                            <?php echo $dexterité;?> <i class="em em-open_hands"></i><br>
                            Agilité :
                            <?php echo $agilité;?><br>
                            Intelligence :
                            <?php echo $intelligence;?>
                        </p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p>
                            Sagesse :
                            <?php echo $sagesse;?> <i class="em em-crystal_ball"></i><br>
                            Potentiel :
                            <?php echo $potentiel;?><br>
                            Initiative :
                            <?php echo $initiative;?><br>
                            Chance :
                            <?php echo $chance;?> <i class="em em-four_leaf_clover"></i><br>
                            Froid :
                            <?php echo $froid;?> <i class="em em-snowflake"></i><br>
                            Chaleur :
                            <?php echo $chaleur;?> <i class="em em-fire"></i><br>
                        </p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p>
                            Maladie :
                            <?php echo $maladie;?> <i class="em em-nauseated_face"></i></i><br>
                            Boisson :
                            <?php echo $boisson;?> <i class="em em-beer"></i><br>
                            Charme :
                            <?php echo $charme;?> <i class="em em-kissing_heart"></i><br>
                            Peur :
                            <?php echo $peur;?> <i class="em em-scream"></i><br>
                            Sommeil :
                            <?php echo $sommeil?> <i class="em em-sleeping"></i><br>
                            Douleur :
                            <?php echo $douleur;?> <i class="em em-face_with_head_bandage"></i>
                        </p>
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
                    <div class="col-lg-10 mx-auto text-center">
                        <h2 class="section-heading">Compétences</h2>
                        <hr class="my-4">
                    </div>
                </div>
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
                                <td><?php echo $artDeLaRue;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Athletisme</th>
                                <td><?php echo $athletisme;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Bibliotheque</th>
                                <td><?php echo $bibliotheque;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Charme</th>
                                <td><?php echo $charme;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Chercher</th>
                                <td><?php echo $chercher;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Conduite</th>
                                <td><?php echo $conduite;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Credit</th>
                                <td><?php echo $credit;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Cuisine</th>
                                <td><?php echo $cuisine;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Diplomatie</th>
                                <td><?php echo $diplomatie;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Discretion</th>
                                <td><?php echo $discretion;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Equitation</th>
                                <td><?php echo $equitation;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Intuition</th>
                                <td><?php echo $intuition;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Maniement</th>
                                <td><?php echo $maniement;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Langue Maternelle</th>
                                <td><?php echo $langueMaternelle;?></td>
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
                                <td><?php echo $larcin;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Leadership</th>
                                <td><?php echo $leadership;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Légende</th>
                                <td><?php echo $legende;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Medecine</th>
                                <td><?php echo $medecine;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Navigation</th>
                                <td><?php echo $navigation;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Orientation</th>
                                <td><?php echo $orientation;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Portage</th>
                                <td><?php echo $portage;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Pilotage</th>
                                <td><?php echo $pilotage;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Premier Soins</th>
                                <td><?php echo $premierSoins;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Psychologie</th>
                                <td><?php echo $psychologie;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Savoir</th>
                                <td><?php echo $savoir;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Seconde Vue</th>
                                <td><?php echo $secondeVue;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Survie</th>
                                <td><?php echo $survie;?></td>
                            </tr>
                            <tr>
                                <th scope="row">Sprint</th>
                                <td><?php echo $sprint;?></td>
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
                                <td><?php echo $traque;?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo $bonus1Nom;?></th>
                                <td><?php echo $bonus1Valeur;?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo $bonus2Nom;?></th>
                                <td><?php echo $bonus2Valeur;?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo $bonus3Nom;?></th>
                                <td><?php echo $bonus3Valeur;?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo $bonus4Nom;?></th>
                                <td><?php echo $bonus4Valeur;?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo $bonus5Nom;?></th>
                                <td><?php echo $bonus5Valeur;?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo $bonus6Nom;?></th>
                                <td><?php echo $bonus6Valeur;?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo $bonus7Nom;?></th>
                                <td><?php echo $bonus7Valeur;?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo $bonus8Nom;?></th>
                                <td><?php echo $bonus8Valeur;?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo $bonus9Nom;?></th>
                                <td><?php echo $bonus9Valeur;?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo $bonus10Nom;?></th>
                                <td><?php echo $bonus10Valeur;?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo $bonus11Nom;?></th>
                                <td><?php echo $bonus11Valeur;?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo $bonus12Nom;?></th>
                                <td><?php echo $bonus12Valeur;?></td>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo $bonus13Nom;?></th>
                                <td><?php echo $bonus13Valeur;?></td>
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
                    <div class="col-lg-10 mx-auto text-center">
                        <h2 class="section-heading">Équipements</h2>
                        <hr class="my-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 mx-auto text-center">
                        <h3>Armure</h3>
                        <div class="table-responsive">
                            <table class="table table-sm table-striped table-secondary text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">Partie</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Qualité</th>
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
                                        <td><?php echo $armureTeteNom;?></td>
                                        <td><?php echo $armureTeteQualité;?></td>
                                        <td><?php echo $armureTeteMatiere;?></td>
                                        <td><?php echo $armureTetePhysique;?></td>
                                        <td><?php echo $armureTeteMagique;?></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Epaule</th>
                                        <td><?php echo $armureEpaulesNom;?></td>
                                        <td><?php echo $armureEpaulesQualité;?></td>
                                        <td><?php echo $armureEpaulesMatiere;?></td>
                                        <td><?php echo $armureEpaulesPhysique;?></td>
                                        <td><?php echo $armureEpaulesMagique;?></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Torse</th>
                                        <td><?php echo $armureTorseNom;?></td>
                                        <td><?php echo $armureTorseQualité;?></td>
                                        <td><?php echo $armureTorseMatiere;?></td>
                                        <td><?php echo $armureTorsePhysique;?></td>
                                        <td><?php echo $armureTorseMagique;?></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Bras</th>
                                        <td><?php echo $armureBrasNom;?></td>
                                        <td><?php echo $armureBrasQualité;?></td>
                                        <td><?php echo $armureBrasMatiere;?></td>
                                        <td><?php echo $armureBrasPhysique;?></td>
                                        <td><?php echo $armureBrasMagique;?></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tassette</th>
                                        <td><?php echo $armureTassetteNom;?></td>
                                        <td><?php echo $armureTassetteQualité;?></td>
                                        <td><?php echo $armureTassetteMatiere;?></td>
                                        <td><?php echo $armureTassettePhysique;?></td>
                                        <td><?php echo $armureTassetteMagique;?></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jambes</th>
                                        <td><?php echo $armureJambesNom;?></td>
                                        <td><?php echo $armureJambesQualité;?></td>
                                        <td><?php echo $armureJambesMatiere;?></td>
                                        <td><?php echo $armureJambesPhysique;?></td>
                                        <td><?php echo $armureJambesMagique;?></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pieds</th>
                                        <td><?php echo $armurePiedsNom;?></td>
                                        <td><?php echo $armurePiedsQualité;?></td>
                                        <td><?php echo $armurePiedsMatiere;?></td>
                                        <td><?php echo $armurePiedsPhysique;?></td>
                                        <td><?php echo $armurePiedsMagique;?></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 mx-auto text-center">
                        <h3>Arme</h3>
                        <p>
                            <?php echo $arme1InfoComplete;?><br>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sort du personnage choisi par l'invocateur -->
        <section id="sort">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto text-center">
                        <h2 class="section-heading">Sort</h2>
                        <hr class="my-4">
                        <p class="mb-5">Sort du personnage
                            <?php echo $nomInvocateur?> !</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Inventaire personnelle du personnage choisi par l'invocateur -->
        <section id="inventairePersonnel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto text-center">
                        <h2 class="section-heading">Inventaire</h2>
                        <hr class="my-4">
                        <p class="mb-5">Inventaire du personnage
                            <?php echo $nomInvocateur?> !</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Inventaire commun au aventurier de Utopia -->
        <section id="inventaireCollectif">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto text-center">
                        <h2 class="section-heading">Inventaire Collectif</h2>
                        <hr class="my-4">
                        <p class="mb-5">Inventaire Collectif des aventuriers d'Utopia !</p>
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
</body>

</html>