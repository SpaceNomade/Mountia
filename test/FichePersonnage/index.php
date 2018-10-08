<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perso Mountia</title>

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
                            <a class="nav-link js-scroll-trigger" href="#chooseYourSoul">Choix Du Personnage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
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
                            <strong>MOUNTIA</strong>
                        </h1>
                        <hr>
                    </div>
                    <div class="col-lg-8 mx-auto">
                        <p class="text-faded mb-5" id="st">L'aventure qui vous changera pour toujours.</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#chooseYourSoul">Découvrir</a>
                    </div>
                </div>
            </div>
        </header>
        <section id="chooseYourSoul">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="section-heading">Veuillez choisir votre âme !</h2>
                        <hr class="my-4">
                        <p class="mb-5">Choisissez votre âme et partez en quêtes ! </p>
                        <form method="POST" action="perso.php">
                            <div class="form-group">
                                <select class="form-control" id="FormControlSelectPlayer" name="nomPersonnage">
                                    <option value="orochi">Orochi / l'Exilé</option>
                                    <option value="orochiDragon">Orochi / l'Exilé (Dragon)</option>
                                    <option value="rackham">Rackham / Basarab Pourfendeur de vent</option>
                                    <option value="barfero">Barfero / Astronome Erudit</option>
                                    <option value="barferoPossedé">Barfero / Astronome Erudit (Possedé)</option>
                                    <option value="xanther">Xanther / Eventreur de l'ombre</option>
                                    <option value="exyu">Exyu / le lutin de l'echec</option>
                                    <option value="exyuGargouille">Exyu (Gargouille)</option>
                                    <option value="erreur">???</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Invoquer l'ame</button>
                        </form>
                        
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