<?php
    // Recuperation du choix de personnage avec methode $_POST
$nomPersonnage = isset($_POST['nomPersonnage']) ? $_POST['nomPersonnage'] : null;
    
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
<html lang=fr>

<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <meta http-equiv=X-UA-Compatible content="ie=edge">
    <link href=../vendor/bootstrap/css/bootstrap.min.css rel=stylesheet>
    <link rel=stylesheet href=https://use.fontawesome.com/releases/v5.3.1/css/all.css integrity=sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU
        crossorigin=anonymous>
    <link href=https://afeld.github.io/emoji-css/emoji.css rel=stylesheet>
    <link href="https://fonts.googleapis.com/css?family=Cookie|Courgette|Dancing+Script|Great+Vibes|Kalam|Kaushan+Script|Marck+Script|Merienda|Merriweather|Pacifico|Satisfy"
        rel=stylesheet>
    <link href=../vendor/magnific-popup/magnific-popup.css rel=stylesheet>
    <link href=../css/creative.css rel=stylesheet>
    <link href=../css/loader.css rel=stylesheet>
    <title>Fiche Personnage</title>
</head>

<body id=page-top>
    <div id=load></div>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id=mainNav>
            <div class=container>
                <a class="navbar-brand js-scroll-trigger" href=#page-top>
                    <?php echo $nomInvocateur; ?></a>
                <button class="navbar-toggler navbar-toggler-right" type=button data-toggle=collapse data-target=#navbarResponsive
                    aria-controls=navbarResponsive aria-expanded=false aria-label="Toggle navigation">
                    <span class=navbar-toggler-icon></span>
                </button>
                <div class="collapse navbar-collapse" id=navbarResponsive>
                    <ul class="navbar-nav ml-auto">
                        <li class=nav-item>
                            <a class="nav-link js-scroll-trigger" href=#Statistique>Statistiques</a>
                        </li>
                        <li class=nav-item>
                            <a class="nav-link js-scroll-trigger" href=#competence>Compétences</a>
                        </li>
                        <li class=nav-item>
                            <a class="nav-link js-scroll-trigger" href=#equipement>Équipements</a>
                        </li>
                        <li class=nav-item>
                            <a class="nav-link js-scroll-trigger" href=#voie>Voie</a>
                        </li>
                        <li class=nav-item>
                            <a class="nav-link js-scroll-trigger" href=#sort>Sort</a>
                        </li>
                        <li class=nav-item>
                            <a class="nav-link js-scroll-trigger" href=#inventairePersonnel>Inventaire</a>
                        </li>
                        <li class=nav-item>
                            <a class="nav-link js-scroll-trigger" href=#inventaireCollectif>Inventaire Groupe</a>
                        </li>
                        <li class=nav-item>
                            <a class=nav-link href=javascript:history.go(-1)><i class="fas fa-door-open"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead text-center text-black d-flex">
            <div class="container my-auto">
                <div class=row>
                    <div class="col-lg-12 mx-auto">
                        <h1 class=text-uppercase>
                            <strong>
                                <?php echo $nomInvocateur; ?></strong>
                        </h1>
                        <hr>
                    </div>
                    <div class="col-lg-12 mx-auto">
                        <p class="text-faded mb-5" id=st>
                            <?php echo $messageAme; ?>.</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href=#Statistique>Suite</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Statistiques du personnage choisi par le joueur. -->
        <section id=Statistique>
            <div class=container>
                <div class=row>
                    <div class="col-lg-12 mx-auto text-center">
                        <h2 class=section-heading>Statistiques</h2>
                        <p class=mb-5>Statistiques du personnage
                            <?php echo $nomInvocateur ?> !</p>
                    </div>
                </div>
                <div class=row>
                    <div class="col-md-6 text-center">
                        <canvas id=myBarChart height=400px></canvas>
                    </div>
                    <div class=col-md-6>
                        <canvas id=myStatTotal height=400px></canvas>
                    </div>
                </div>
                <div class=row>
                    <div class="col-md-4 text-center">
                        <p>
                            <i class="fas fa-coins" style=color:#FFD700>
                                <?php echo $florinOr; ?></i> Florin d'or<br>
                            <i class="fas fa-coins" style=color:#CECECE>
                                <?php echo $florinArgent ?></i> Florin d'argent<br>
                            <i class="fas fa-coins" style=color:#B36700>
                                <?php echo $florinCuivre; ?></i> Florin de cuivre
                        </p>
                    </div>
                </div>
                <p class=text-center>
                    <?php echo $irrégularité; ?>
                </p>
            </div>
        </section>
        
        
        <!-- Equipement du personnage choisi par le joueur. (Armure et Arme)-->
        <section id="equipement">
            <div class=container>
                <div class=row>
                    <div class="col-lg-12 mx-auto text-center">
                        <h3>Armure</h3>
                        <hr class=my-4>
                        <div class=table-responsive>
                            <table class="table table-sm table-striped table-dark text-center">
                                <thead>
                                    <tr>
                                        <th scope=col>ID</th>
                                        <?php foreach ($listeArmure[0] as $key => $value) : ?>
                                        <th scope="col">
                                            <?= $key ?>
                                        </th>
                                        <?php endforeach; ?>
                                </thead>
                                <tbody>
                                    <?php foreach ($listeArmure as $armure) : ?>
                                    <tr>
                                        <td scope="row">
                                            <?= ++$compteurArmure ?>
                                        </td>
                                        <?php foreach ($armure as $key => $value) : ?>
                                        <td>
                                            <?= ($key != 'Enchantement') ? ucfirst($value) : $value ?>
                                        </td>
                                        <?php endforeach; ?>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan=5>
                                            Armure Physique Total
                                            <?php echo round($armurePhysiqueComplete); ?>
                                        </td>
                                        <td colspan=4>
                                            Armure Magique Total
                                            <?php echo round($armureMagiqueComplete); ?>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table><br>
                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class="col-lg-12 mx-auto text-center">
                        <h3>Arme</h3>
                        <hr class=my-4>
                        <div class=table-responsive>
                            <table class="table table-sm table-striped table-dark text-center">
                                <thead>
                                    <tr>
                                        <th scope=col>ID</th>
                                        <?php foreach ($listeArme[0] as $key => $value) : ?>
                                        <th scope="col">
                                            <?= $key ?>
                                        </th>
                                        <?php endforeach; ?>
                                </thead>
                                <tbody>
                                    <?php foreach ($listeArme as $arme) : ?>
                                    <tr>
                                        <td scope="row">
                                            <?= ++$compteurArme ?>
                                        </td>
                                        <?php foreach ($arme as $key => $value) : ?>
                                        <td>
                                            <?= ($key != 'email') ? ucfirst($value) : $value ?>
                                        </td>
                                        <?php endforeach; ?>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table><br>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Sort du personnage -->
        <section id="sort">
            <div class="container">
            <div class=row>
                <div class="col-lg-12 mx-auto text-center">
                    <h3>Sort</h3>
                    <hr class=my-4>
                    <div class=table-responsive>
                        <table class="table table-sm table-striped table-dark text-center">
                            <thead>
                                <tr>
                                    <th  class="align-middle" scope=col>ID</th>
                                    <?php foreach ($listeSort[0] as $key => $value) : ?>
                                    <th class="align-middle" scope="col"><?= $key ?></th>
                                    <?php endforeach; ?>
                            </thead>
                            <tbody>
                                <?php foreach ($listeSort as $sort) : ?>
                                <tr>
                                    <td class="align-middle" scope="row"><?= ++$compteurSort ?></td>
                                    <?php foreach ($sort as $key => $value) : ?>
                                    <td class="align-middle"><?= ($key != 'email') ? ucfirst($value) : $value ?></td>
                                    <?php endforeach; ?>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table><br>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Inventaire du personnage -->
        <section id="inventairePersonnel">
            <div class="container">
            <div class=row>
                <div class="col-lg-12 mx-auto text-center">
                    <h3>Inventaire</h3>
                    <hr class=my-4>
                    <div class=table-responsive>
                        <table class="table table-sm table-striped table-dark text-center">
                            <thead>
                                <tr>
                                    <th  class="align-middle" scope=col>ID</th>
                                    <?php foreach ($listeInventaire[0] as $key => $value) : ?>
                                    <th class="align-middle" scope="col"><?= $key ?></th>
                                    <?php endforeach; ?>
                            </thead>
                            <tbody>
                                <?php foreach ($listeInventaire as $inventaire) : ?>
                                <tr>
                                    <td class="align-middle" scope="row"><?= ++$compteurInventaire ?></td>
                                    <?php foreach ($inventaire as $key => $value) : ?>
                                    <td class="align-middle"><?= ($key != 'email') ? ucfirst($value) : $value ?></td>
                                    <?php endforeach; ?>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table><br>
                    </div>
                </div>
            </div>
        </section>

        <!-- Inventaire collectif -->
        <section id="inventaireCollectif">
            <div class="container">
            <div class=row>
                <div class="col-lg-12 mx-auto text-center">
                    <h3>Inventaire</h3>
                    <hr class=my-4>
                    <div class=table-responsive>
                        <table class="table table-sm table-striped table-dark text-center">
                            <thead>
                                <tr>
                                    <th  class="align-middle" scope=col>ID</th>
                                    <?php foreach ($listeInventaireCollectif[0] as $key => $value) : ?>
                                    <th class="align-middle" scope="col"><?= $key ?></th>
                                    <?php endforeach; ?>
                            </thead>
                            <tbody>
                                <?php foreach ($listeInventaireCollectif as $inventaireCollectif) : ?>
                                <tr>
                                    <td class="align-middle" scope="row"><?= ++$compteurInventaireCollectif ?></td>
                                    <?php foreach ($inventaireCollectif as $key => $value) : ?>
                                    <td class="align-middle"><?= ($key != 'email') ? ucfirst($value) : $value ?></td>
                                    <?php endforeach; ?>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table><br>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src=../vendor/jquery/jquery.min.js> </script> <script src=../vendor/bootstrap/js/bootstrap.bundle.min.js> </script>
        <script src=../vendor/jquery-easing/jquery.easing.min.js> </script> <script src=../vendor/scrollreveal/scrollreveal.min.js>
        </script> <script src=../vendor/magnific-popup/jquery.magnific-popup.min.js> </script> <script src=../js/creative.min.js>
        </script> <script src=../js/Chart.js> </script> <script>

            var ctx = document.getElementById("myStatTotal").getContext('2d');
            var myStatTotal = new Chart(ctx, {
                // The type of chart we want to create
                type: 'radar',
                // The data for our dataset
                data: {
                    labels: ["Charisme", "Force", "Endurance", "Dextérité", "Agilité", "Intelligence", "Sagesse", "Potentiel", "Initiative", "Chance", "Froid", "Chaleur", "Maladie", "Boisson", "Charme", "Peur", "Sommeil", "Douleur"],
                    datasets: [{
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        pointBackgroundColor: 'rgba(128, 21, 21)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [
                            <?= htmlspecialchars($charisme); ?>,
                            <?= htmlspecialchars($force); ?>,
                            <?= htmlspecialchars($endurance); ?>,
                            <?= htmlspecialchars($dexterité); ?>,
                            <?= htmlspecialchars($agilité); ?>,
                            <?= htmlspecialchars($intelligence); ?>,
                            <?= htmlspecialchars($sagesse); ?>,
                            <?= htmlspecialchars($potentiel); ?>,
                            <?= htmlspecialchars($initiative); ?>,
                            <?= htmlspecialchars($chance); ?>,
                            <?= htmlspecialchars($froid); ?>,
                            <?= htmlspecialchars($chaleur); ?>,
                            <?= htmlspecialchars($maladie); ?>,
                            <?= htmlspecialchars($boisson); ?>,
                            <?= htmlspecialchars($charme); ?>,
                            <?= htmlspecialchars($peur); ?>,
                            <?= htmlspecialchars($sommeil); ?>,
                            <?= htmlspecialchars($douleur); ?>],
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

            var ctx = document.getElementById("myBarChart").getContext('2d');
            var myBarChart = new Chart(ctx, {
                type: 'horizontalBar',
                data: {
                    datasets: [{
                        label: 'Vie',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [<?= htmlspecialchars($pdv); ?>],
                        },
                    {
                        label: 'Spiritualité',
                        backgroundColor: 'rgba(55, 220, 0, 0.2)',
                        borderColor: 'rgb(55, 220, 0)',
                        data: [<?= htmlspecialchars($pds); ?>],
                        },
                    {
                        label: 'Mana',
                        backgroundColor: 'rgba(0, 164, 219, 0.2)',
                        borderColor: 'rgb(0, 164, 219)',
                        data: [<?= htmlspecialchars($pdm); ?>]
                    }]
                },
                // Configuration options go here
                options: {
                    legend: {
                        display: false,
                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
    </body>
</html>