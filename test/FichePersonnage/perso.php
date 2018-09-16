<?php

    // Recuperation du choix de personnage avec methode $_POST
    $nomPersonnage = isset($_POST['nomPersonnage']) ? $_POST['nomPersonnage'] : NULL;
    
    // Importation du fichier qui contient les stats des personnage
    include('statistiquePersonnageAll.php');
    
    // Affichage d'une pop up alert pour confirmer la selection du perso
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
                                <?php echo $nomInvocateur; ?></strong>
                        </h1>
                        <hr>
                    </div>
                    <div class="col-lg-8 mx-auto">
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
                    <div class="col-lg-8 mx-auto text-center">
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    Point de vie :
                                    <?php echo $pdv;?><i class="em em-heart"></i><br>
                                    Point de mana :
                                    <?php echo $pdm;?><i class="em em-blue_heart"></i><br>
                                    Point Special :
                                    <?php echo $pds;?><i class="em em-green_heart"></i>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    Florin d'or :
                                    <?php echo $florinOr;?> <i class="fas fa-coins" style="color:#FFD700"></i><br>
                                    Florin d'argent :
                                    <?php echo $florinArgent?> <i class="fas fa-coins" style="color:#CECECE"></i><br>
                                    Florin de cuivre :
                                    <?php echo $florinCuivre;?> <i class="fas fa-coins" style="color:#B36700"></i>
                                </p>
                            </div>
                            <hr class="my-4">

                        </div>
                        <br>
                        <div class="row text-center">
                            <div class="col-md-4">
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
                                    <?php echo $agilité;?>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p>
                                    Sagesse :
                                    <?php echo $sagesse;?> <br>
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
                            <div class="col-md-4">
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
                        <p>(*) = Irrégularité</p>
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