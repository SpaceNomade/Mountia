<?php
$compteurInventaireCollectif = 0;

if ($nomPersonnage == "orochi" || $nomPersonnage == "orochiDragon" || $nomPersonnage == "rackham" || $nomPersonnage == "barfero" || $nomPersonnage == "barferoPossedé" || $nomPersonnage == "xanther" || $nomPersonnage == "exyu" || $nomPersonnage == "exyuGargouille") {
    echo "<script>console.log('Inventaire collectif bien importer'),</script>";

    $listeInventaireCollectif = [
        [
            "Nom" => "Ration Viande",
            "Quantité" => "2",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Viande",
            "Description" => "X",
        ],
        [
            "Nom" => "Ration Viande",
            "Quantité" => "2",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Viande",
            "Description" => "X",
        ],
        [
            "Nom" => "Ration bison",
            "Quantité" => "16",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Viande",
            "Description" => "X",
        ],
        [
            "Nom" => "Rune",
            "Quantité" => "4",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Rune Magique",
            "Quantité" => "9",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Rubis",
            "Quantité" => "50 Gramme",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Émeraude",
            "Quantité" => "50 Gramme",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Diamant",
            "Quantité" => "50 Gramme",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Zénérite",
            "Quantité" => "50 Gramme",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Clé",
            "Quantité" => "1",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "X",
            "Description" => "X",
        ],
        [
            "Nom" => "Pass",
            "Quantité" => "X",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Item",
            "Description" => "Permet de prendre le bateau gratuitement pour un allez seulement",
        ],
        [
            "Nom" => "Quete level 15 a 20",
            "Quantité" => "X",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Quete",
            "Description" => "Enlevement suspect pret de marble tower (Enlevement d'etre vivant)",
        ],
        [
            "Nom" => "Ration de loup",
            "Quantité" => "9",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Viande",
            "Description" => "Viande de loup",
        ],
        [
            "Nom" => "Peau d'Ours",
            "Quantité" => "24 metre",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Peau",
            "Description" => "Peau de plusieurs ours ",
        ],
        [
            "Nom" => "Ration d'Ours",
            "Quantité" => "24",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Viande",
            "Description" => "X",
        ],
        [
            "Nom" => "Peau aigle drakan",
            "Quantité" => "16 metre",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Peau",
            "Description" => "Peau de plusieurs aigle",
        ],
        [
            "Nom" => "Ration aigle drakan",
            "Quantité" => "18",
            "Prix" => "X",
            "Prix Revente" => "X",
            "Type" => "Viande",
            "Description" => "Viande d'aigle drakan",
        ]
    ];

    $CollectifOr = 269+3+65+84+10+300+200;
    $CollectifArgent = 5+5;
    $CollectifCuivre = 45;


} else {
    echo "<script>console.log('Inventaire collectif bien non importer'),</script>";
}

?>
