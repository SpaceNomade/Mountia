<?php
    $nomPersonnage = isset($_POST['nomPersonnage']) ? $_POST['nomPersonnage'] : NULL;

     if ($nomPersonnage == "orochi") {
    $verdict = "<script> console.log('Perso Orochi');
    confirm('Orochi est invoquer');</script>";
    $messageAme = "L'âme de votre guerrier est invoquée";

    } elseif ($nomPersonnage == "rackham"){
    $verdict = "<script> console.log('Perso Rackham');
    confirm('Rackham est invoquer');</script>";
    $messageAme = "L'âme de votre guerrier est invoquée";
    
    $florinOr = "74";
    $florinArgent = "7";
    $florinCuivre = "2";

    $race = "Rédioras";
    $metier1 = "Mercenaire";
    $metier2 = "NC";
    $alignement = "Neutre";
    $couleur = "Violette";
    $niveau = "2";
    $experience = "4 Xp";
    $age = "24";
    $sexe = "M";
    $poids = "220 KG";
    $taille = "2,40 M";

    $Charisme = "7";
    $Force = 12+1;
    $Endurance = "9";
    $Dextérité = 9+5;
    $Agilité = 8+1;
    $Intelligence = 7+4;
    $Sagesse = "4";
    $Potentiel = "5";
    $Initiative = 7+2;
    $Chance = "5";
    $Froid = "7";
    $Chaleur = "7";
    $Maladie = "7";
    $Boisson = "7";
    $Charme = "7";
    $Peur = "7";
    $Sommeil = "7";
    $Douleur = "7";

    } elseif ($nomPersonnage == "barfero") {
    $verdict = "<script> console.log('Perso Barfero');
    confirm('Barfero est invoquer');</script>";
    $messageAme = "L'âme de votre guerrier est invoquée";

    $florinOr = 19+46;
    $florinArgent = 8+8;
    $florinCuivre = "0";

    $race = "Lunaréen";
    $metier1 = "Alchimiste";
    $metier2 = "NC";
    $alignement = "Chaotique / Bon";
    $couleur = "Bleu / Gris";
    $niveau = "2";
    $experience = "4 Xp";
    $age = "810";
    $sexe = "M";
    $poids = "28 KG";
    $taille = "1,95 M";

    $charisme = "9";
    $force = "5";
    $endurance = "5";
    $dexterité = "7 (Irregularité)";
    $agilité = "5";
    $intelligence = "8";
    $sagesse = "10";
    $potentiel = "15";
    $initiative = "8";
    $chance = "5";
    $froid = "7";
    $chaleur = "7";
    $maladie = "11";
    $boisson = "7";
    $charme = "7";
    $peur = "7";
    $sommeil = "7";
    $douleur = "7";

    } elseif ($nomPersonnage == "xanther") {
    $verdict = "<script> console.log('Perso Xanther');
    confirm('Xanther est invoquer');</script>";
    $messageAme = "L'âme de votre guerrier est invoquée";

    } elseif ($nomPersonnage == "exyu") {
    $verdict = "<script> console.log('Perso Exyu');
    confirm('Exyu est invoquer');</script>";
    $messageAme = "L'âme de votre guerrier est invoquée";

    } else {
    $verdict = "<script> console.log('Perso inconnu');
    confirm('Vous etes inconnu personne ne peux vous invoquer');</script>";
    $messageAme = "L'âme de votre guerrier ne peux pas etre invoquée";

    }
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
                            <a class="nav-link js-scroll-trigger" href="#Statistique">Statistique Du Personnage</a>
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
                                <?php echo $nomPersonnage; ?></strong>
                        </h1>
                        <hr>
                    </div>
                    <div class="col-lg-8 mx-auto">
                        <p class="text-faded mb-5" id="st"><?php echo $messageAme;?>.</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#Statistique">Suite</a>
                    </div>
                </div>
            </div>
        </header>

        <section id="Statistique">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <p>
                            Florin d'or :
                            <?php echo $florinOr;?><br>
                            Florin d'argent :
                            <?php echo $florinArgent?><br>
                            Florin de cuivre :
                            <?php echo $florinCuivre;?>
                        </p>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <p>
                                    Charisme :<?php echo $charisme;?><br>
                                    Force :<?php echo $force;?><br>
                                    Endurance :<?php echo $endurance;?><br>
                                    Dexterité :<?php echo $dexterité;?><br>
                                    Agilité :<?php echo $agilité;?><br>
                                    Intelligence :<?php echo $agilité;?>
                                </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>
                                    Sagesse :<?php echo $sagesse;?> <br>
                                    Potentiel :<?php echo $potentiel;?><br>
                                    Initiative : <?php echo $initiative;?><br>
                                    Chance : <?php echo $chance;?><br>
                                    Froid : <?php echo $froid;?><br>
                                    Chaleur : <?php echo $chaleur;?><br>
                                </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>
                                    Maladie : <?php echo $maladie;?> <br>
                                    Boisson : <?php echo $boisson;?><br>
                                    Charme : <?php echo $charme;?><br>
                                    Peur : <?php echo $peur;?><br>
                                    Sommeil : <?php echo $sommeil?><br>
                                    Douleur : <?php echo $douleur;?>
                                </p>
                            </div>
                        </div>
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

    <!-- Custom scripts for this template -->
    <script src="../js/creative.min.js"></script>
    <script>
        document.querySelector('main').style.display = 'none';
        document.getElementById('load').classList.add('spinner')

        setTimeout(() => {
            document.getElementById('load').classList.remove('spinner')
            document.querySelector('main').style.display = 'block';
        }, 2000);
    </script>
</body>

</html>