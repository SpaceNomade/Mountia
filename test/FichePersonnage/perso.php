<?php
    session_start();
    $_SESSION['nomPersonnage'] = $_POST['nomPersonnage']; 
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

</head>

<body>
    <h1>Un super titre</h1>
    <p id="para">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, necessitatibus libero ullam corporis minus
        odio explicabo et, magni nobis magnam nisi ad impedit quis odit consequatur quidem repudiandae ut? Asperiores.
    </p>
    <?php
    $nomPersonnage = $_POST['nomPersonnage'];
     if ($nomPersonnage == orochi) {
    $verdict = "<script type=\"text/javascript\"> alert('Votre perso est ' + nomPersonnage);</script>";
} elseif ($nomPersonnage == rackham){
    $verdict =  "<script type=\"text/javascript\"> alert('Votre perso est ' + nomPersonnage);</script>";
} elseif ($nomPersonnage == barfero) {
    $verdict =  "<script type=\"text/javascript\"> alert('Votre perso est ' + nomPersonnage);</script>";
} elseif ($nomPersonnage == xanther) {
    $verdict =  "<script type=\"text/javascript\"> alert('Votre perso est ' + nomPersonnage);</script>";
} elseif ($nomPersonnage == exyu) {
    $verdict =  "<script type=\"text/javascript\"> alert('Votre perso est ' + nomPersonnage);</script>";
}
    // } else {
//     $verdict =  "Votre personnage est introuvable";
// }
    echo $verdict;

?>
</body>

</html>