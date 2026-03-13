<?php

header("Content-Type: application/json");

/* ==================================================
CONFIGURAÇÃO DA LOJA
================================================== */

$store = "Candy Store";


/* ==================================================
PRODUTOS MAIS VENDIDOS
================================================== */

$best_sellers = [
    "Chocolate",
    "Mints",
    "Fudge",
    "Bubble gum",
    "Toffe",
    "Jelly beans"
];


/* ==================================================
OFERTAS DISPONÍVEIS
================================================== */

$offers = [

    [
        "name" => "Ana Maria",
        "flavor" => "strawberry",
        "stock" => 110
    ],

    [
        "name" => "Ana Maria",
        "flavor" => "chocolate",
        "stock" => 70
    ],

    [
        "name" => "Fudge",
        "flavor" => "with banana",
        "stock" => 80
    ]

];


/* ==================================================
RESPOSTA DA API
================================================== */

$response = [

    "store" => $store,
    "best_sellers" => $best_sellers,
    "offers" => $offers

];

echo json_encode($response, JSON_PRETTY_PRINT);

?>

{
 "store": "Candy Store",
 "best_sellers": [
  "Chocolate",
  "Mints",
  "Fudge",
  "Bubble gum",
  "Toffe",
  "Jelly beans"
 ],
 "offers": [
  {
   "name": "Ana Maria",
   "flavor": "strawberry",
   "stock": 110
  }
 ]
}