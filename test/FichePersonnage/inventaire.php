<?php
$compteurInventaire = 0;

if ($nomPersonnage == "orochi" || $nomPersonnage == "orochiDragon") {
    echo "<script>console.log('Inventaire de Orochi importer');</script>";

    $listeInventaire = [
        [
            "Nom" => "X",
            "Quantité" => "X",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "X",
            "Quantité" => "X",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
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
            "Description" => "X",
        ],
        [
            "Nom" => "Potion de Mana",
            "Quantité" => "4",
            "Prix" => "1",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Cape",
            "Quantité" => "1",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Burin en Fer (A)",
            "Quantité" => "1",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Outil",
            "Description" => "X",
        ],
        [
            "Nom" => "Potion de Mana",
            "Quantité" => "4",
            "Prix" => "1",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
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
            "Description" => "X",
        ],
        [
            "Nom" => "Potion de mana",
            "Quantité" => "1",
            "Prix" => "1",
            "Prix Revente" => "X",
            "Type" => "Potion",
            "Description" => "X",
        ],
        [
            "Nom" => "Plantes",
            "Quantité" => "400 Gramme",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Craft",
            "Description" => "X",
        ],
        [
            "Nom" => "Longue Vue",
            "Quantité" => "1",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Outils",
            "Description" => "X",
        ],
        [
            "Nom" => "Ration de viande",
            "Quantité" => "15",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Viande",
            "Description" => "X",
        ],
        [
            "Nom" => "Potion Hallucinogène",
            "Quantité" => "10",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Potion",
            "Description" => "X",
        ]
    ];

} elseif ($nomPersonnage == "xanther"){
    echo "<script>console.log('Inventaire de Xanther importer');</script>";
    
    $listeInventaire = [
        [
            "Nom" => "X",
            "Quantité" => "X",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "X",
            "Quantité" => "X",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
        ]
    ];
    

} elseif ($nomPersonnage == "exyu" || $nomPersonnage == "exuyGargouille"){
    echo "<script>console.log('Inventaire de Exyu importer');</script>";

    $listeInventaire = [
        [
            "Nom" => "X",
            "Quantité" => "X",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "X",
            "Quantité" => "X",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
        ]
    ];

    

    
} else {
    echo "<script>console.log('Erreur lors de la selection du personnage');</script>";


    $listeInventaire = [
        [
            "Nom" => "X",
            "Quantité" => "X",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "X",
            "Quantité" => "X",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
        ]
    ];
}

?>
<!-- {+ 1 tatouage  +14% de degat de sort pour barfero } -->