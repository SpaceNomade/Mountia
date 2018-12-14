<?php
if ($nomPersonnage == "orochi" || $nomPersonnage == "orochiDragon") {
    echo "<script>console.log('Sort de Orochi importer');</script>";

    $listeSort = [
        [
            "Nom" => "Keshutsu",
            "Point" => "4",
            "Maitrise" => "Novice",
            "Cout" => "X",
            "Degat" => "X",
            "Duree" => "X",
            "Portée" => "10",
            "Effect Secondaire" => "X",
            "Description" => "Détecte tous les métaux à sa portée d'actions",
        ],
        [
            "Nom" => "Doragon Buredo",
            "Point" => "4",
            "Maitrise" => "Novice",
            "Cout" => "10",
            "Degat" => "9",
            "Duree" => "3",
            "Portée" => "X",
            "Effect Secondaire" => "X",
            "Description" => "Augmente la longueur de la lame de 25%",
        ],
        [
            "Nom" => "Doragon No Handan",
            "Point" => "2",
            "Maitrise" => "Novice",
            "Cout" => "5",
            "Degat" => "24",
            "Duree" => "X",
            "Portée" => "Arme",
            "Effect Secondaire" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Doragon Shirudo",
            "Point" => "2",
            "Maitrise" => "Novice",
            "Cout" => "X",
            "Degat" => "X",
            "Duree" => "X",
            "Portée" => "X",
            "Effect Secondaire" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Doragon Nokibu",
            "Point" => "2",
            "Maitrise" => "Novice",
            "Cout" => "X",
            "Degat" => "X",
            "Duree" => "X",
            "Portée" => "X",
            "Effect Secondaire" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Doragon Chën",
            "Point" => "2",
            "Maitrise" => "Novice",
            "Cout" => "X",
            "Degat" => "X",
            "Duree" => "X",
            "Portée" => "10",
            "Effect Secondaire" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Kinzoku No Henka",
            "Point" => "6",
            "Maitrise" => "Disciple",
            "Cout" => "X",
            "Degat" => "X",
            "Duree" => "X",
            "Portée" => "X",
            "EffectSecondaire" => "Fer / Fer Blanc / Fer Noir / Argent / Acier / Acier Blanc / Acier Noir",
            "Description" => "Permet de changer le type de metal",
        ],
        [
            "Nom" => "Doragon Ämä",
            "Point" => "2",
            "Maitrise" => "Novice",
            "Cout" => "10",
            "Degat" => "1",
            "Duree" => "2",
            "Portée" => "X",
            "Effect Secondaire" => "X",
            "Description" => "Renforce la resistance physique et magique de l'armure",
        
        ]
    ];
    

    


    


} elseif ($nomPersonnage == "rackham"){
    echo "<script>console.log('Sort de Rackham importer');</script>";

    $listeSort = [
        [
            "Nom" => "X Coups",
            "Point" => "6",
            "Maitrise" => "Novice",
            "Cout" => 6,
            "Degat" => 26,
            "Duree" => "X",
            "Portée" => "X",
            "EffectSecondaire" => "x",
            "Description" => "Lancé un dés de 4 afin de savoir combien de coup seront porté",
        ],
        [
            "Nom" => "Charge Demoniaque",
            "Point" => "6",
            "Maitrise" => "X",
            "Cout" => 6,
            "Degat" => 26,
            "Duree" => "X",
            "Portée" => 15,
            "EffectSecondaire" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Cyclone Tournoyant",
            "Point" => "2",
            "Maitrise" => "Novice",
            "Cout" => 25,
            "Degat" => 24,
            "Duree" => 3,
            "Portée" => 2,
            "EffectSecondaire" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Illusion",
            "Point" => "X",
            "Maitrise" => "X",
            "Cout" => "X",
            "Degat" => "X",
            "Duree" => "X",
            "Portée" => "X",
            "EffectSecondaire" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Arsenal Fantome",
            "Point" => "X",
            "Maitrise" => "X",
            "Cout" => "X",
            "Degat" => "X",
            "Duree" => "X",
            "Portée" => "X",
            "EffectSecondaire" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Attaque Fantome",
            "Point" => "X",
            "Maitrise" => "X",
            "Cout" => "X",
            "Degat" => "X",
            "Duree" => "X",
            "Portée" => "X",
            "EffectSecondaire" => "X",
            "Description" => "X",
        ],
    ];


} elseif ($nomPersonnage == "barfero" || $nomPersonnage == "barferoPossedé"){
    echo "<script>console.log('Sort de Barfero importer');</script>";

    $listeSort = [
        [
            "Nom" => "Cri d'ether",
            "Point" => "5",
            "Maitrise" => "Novice",
            "Cout" => "5",
            "Degats" => "9+8",
            "Durée" => "",
            "Portée" => "10",
            "Effet Secondaire" => "",
            "Description" => "Pousse un cri d'éther qui s'écrase sur les ennemies.",

        ],
        [
            "Nom" => "Terreur",
            "Point" => "3",
            "Maitrise" => "Novice",
            "Cout" => "5",
            "Degats" => "",
            "Durée" => "7",
            "Portée" => "Cible",
            "Effet Secondaire" => "- 1 Peur",
            "Description" => "Fait regner la terreur dans le coeur de l'adversaire.",

        ],
        [
            "Nom" => "Piege",
            "Point" => "3",
            "Maitrise" => "Novice",
            "Cout" => "6",
            "Degats" => "7+8",
            "Durée" => "2",
            "Portée" => "5",
            "Effet Secondaire" => "",
            "Description" => "Pose un piege invisible a l'ennemi.",

        ],
        [
            "Nom" => "Prison",
            "Point" => "5",
            "Maitrise" => "Novice",
            "Cout" => "5",
            "Degats" => "9+8",
            "Durée" => "",
            "Portée" => "10",
            "Effet Secondaire" => "",
            "Description" => "Materialise une prison grace a son element magique.",

        ],
        [
            "Nom" => "Invocation Calcifer",
            "Point" => "9",
            "Maitrise" => "Disciple",
            "Cout" => "6",
            "Degats" => "25+8",
            "Durée" => "5",
            "Portée" => "15",
            "Effet Secondaire" => "Implosion (Zone d'effet de 4 Metre)",
            "Description" => "Invoque le demon Calcifer. Avant de retourner dans les abysses, Calcifer se charge d'énergie et active son effet secondaire.",

        ],
        [
            "Nom" => "Portail",
            "Point" => "3",
            "Maitrise" => "Novice",
            "Cout" => "10",
            "Degats" => "",
            "Durée" => "7",
            "Portée" => "",
            "Effet Secondaire" => "",
            "Description" => "Crée un portail permettant de cacher trois objets ou un être vivant.",

        ],
        [
            "Nom" => "Conjuration Elementaire",
            "Point" => "3",
            "Maitrise" => "Novice",
            "Cout" => "10",
            "Degats" => "",
            "Durée" => "7",
            "Portée" => "Cible",
            "Effet Secondaire" => "",
            "Description" => "Permet de conjurer une arme et de rajouter un aspect d'element sur une arme ou une invocation",

        ],
        [

        ],
        [
            "Nom" => "Magie d'ecriture",
            "Point" => "5",
            "Maitrise" => "Novice",
            "Cout" => "",
            "Degats" => "",
            "Durée" => "",
            "Portée" => "CàC",
            "Effet Secondaire" => "",
            "Description" => "Fait appel a la magie ecrite sur un parchemin",
        ]
        
    ];


} elseif ($nomPersonnage == "xanther"){
    echo "<script>console.log('Sort de Xanther importer');</script>";

    $listeSort = [
        [
            "Nom" => "Tir Précis",
            "Point" => "2",
            "Maitrise" => "Novice",
            "Cout" => "6",
            "Degats" => "23",
            "Durée" => "3",
            "Portée" => "300",
            "Effet Secondaire" => "",
            "Description" => "Cible une zone",
        ],
        [
            "Nom" => "Shadowspread",
            "Point" => "2",
            "Maitrise" => "Novice",
            "Cout" => "10",
            "Degats" => "+ 2",
            "Durée" => "3",
            "Portée" => "CàC",
            "Effet Secondaire" => "Ajoute des degats d'ombre",
            "Description" => "Fait appel a la magie de l'ombre pour augmenter les degats",
        ],
        [
            "Nom" => "Darkshield",
            "Point" => "2",
            "Maitrise" => "Novice",
            "Cout" => "6",
            "Degats" => "16",
            "Durée" => "2",
            "Portée" => "5",
            "Effet Secondaire" => "",
            "Description" => "Bouclier crée grace a la magie de l'ombre",
        ],
        [
            "Nom" => "ShadowGate",
            "Point" => "",
            "Maitrise" => "Novice",
            "Cout" => "10",
            "Degats" => "",
            "Durée" => "3",
            "Portée" => "10",
            "Effet Secondaire" => "P'tit portail de tp pas piqué des hannetons ou je peux me tp ou faire tp des trucs.",
            "Description" => "Portails d'ombres",
        ],
    ];



} elseif ($nomPersonnage == "exyu" || $nomPersonnage == "exyuGargouille"){
    echo "<script>console.log('Sort de Exyu importer');</script>";

    $listeSort = [
        [
            "Nom" => "Pieux transperçants",
            "Point" => "10",
            "Maitrise" => "X",
            "Cout" => "7",
            "Degat" => "11",
            "Duree" => "X",
            "Portée" => "23",
            "Effect Secondaire" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Mur de racines",
            "Point" => "6",
            "Maitrise" => "X",
            "Cout" => "7",
            "Degat" => "7",
            "Duree" => "3 tours",
            "Portée" => "8",
            "Effect Secondaire" => "1m/1m",
            "Description" => "X",
        ],
        [
            "Nom" => "Fruit de soin",
            "Point" => "6",
            "Maitrise" => "X",
            "Cout" => "6",
            "Degat" => "soin 1 pdv",
            "Duree" => "X",
            "Portée" => "Cac",
            "Effect Secondaire" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Fleur du mal",
            "Point" => "2",
            "Maitrise" => "X",
            "Cout" => "10",
            "Degat" => "7",
            "Duree" => "2",
            "Portée" => "5",
            "Effect Secondaire" => "entrave l'ennemi à sa portée (2m de rayon)",
            "Description" => "X",
        ],
    ];

} else {
    echo "<script>console.log('Sort non recuperer')</script>";
}

?>