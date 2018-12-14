<?php
if ($nomPersonnage == "orochi" || $nomPersonnage == "orochiDragon") {
    echo "<script>console.log('Inventaire de Orochi importer');</script>";

    $listeInventaire = [
        [
            "Nom" => "X",
            "Quantité" => "X",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
        ],
        [
            "Nom" => "X",
            "Quantité" => "X",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
        ]
    ];
    

} elseif ($nomPersonnage == "rackham"){
    echo "<script>console.log('Inventaire de Rackham importer');</script>";
    

    $listeInventaire = [
        [
            "Nom" => "Potion de Soin",
            "Quantité" => "14",
            "Prix" => "1",
            "Prix Revente" => "X",
            "Type" => "Potion",
        ],
        [
            "Nom" => "Potion de Mana",
            "Quantité" => "4",
            "Prix" => "1",
            "Prix Revente" => "X",
            "Type" => "X",
        ],
        [
            "Nom" => "Cape",
            "Quantité" => "1",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
        ],
        [
            "Nom" => "Burin en Fer (A)",
            "Quantité" => "1",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Outil",
        ],
        [
            "Nom" => "Potion de Mana",
            "Quantité" => "4",
            "Prix" => "1",
            "Prix Revente" => "X",
            "Type" => "X",
        ],
    ];

} elseif ($nomPersonnage == "barfero" || $nomPersonnage == "barferoPossedé"){
    echo "<script>console.log('Inventaire de Barfero importer');</script>";

    $listeInventaire = [
        [
            "Nom" => "Potion de soin",
            "Quantité" => "11",
            "Prix" => "1",
            "Prix Revente" => "X",
            "Type" => "Potion",
        ],
        [
            "Nom" => "Potion de mana",
            "Quantité" => "1",
            "Prix" => "1",
            "Prix Revente" => "X",
            "Type" => "Potion",
        ],
        [
            "Nom" => "Plantes",
            "Quantité" => "400 Gramme",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Craft",
        ],
        [
            "Nom" => "Longue Vue",
            "Quantité" => "1",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Outils",
        ],
        [
            "Nom" => "Ration de viande",
            "Quantité" => "15",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Viande",
        ],
        [
            "Nom" => "Potion Hallucinogène",
            "Quantité" => "10",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Potion",
        ]
    ];

} elseif ($nomPersonnage == "xanther"){
    echo "<script>console.log('Inventaire de Xanther importer');</script>";
    
    $listeInventaire = [
        [

        ],
    ];
    

} elseif ($nomPersonnage == "exyu" || $nomPersonnage == "exuyGargouille"){
    echo "<script>console.log('Inventaire de Exyu importer');</script>";

    $listeInventaire = [
        [

        ],
    ];

    

    
} else {
    echo "<script>console.log('Erreur lors de la selection du personnage');</script>";


    $listeInventaire = [
        [

        ],
    ];
}

?>
<!-- {+ 1 tatouage  +14% de degat de sort pour barfero } -->