<?php

header("Content-Type: application/json; charset=utf-8");

/* =========================
   CONFIGURAÇÃO DA LOJA
========================= */
$store = "Candy Store";


/* =========================
   PRODUTOS MAIS VENDIDOS
========================= */
$bestSellers = [
    "Chocolate",
    "Mints",
    "Fudge",
    "Bubble gum",
    "Toffee",
    "Jelly beans"
];


/* =========================
   OFERTAS DISPONÍVEIS
========================= */
$offers = [
    [
        "name"   => "Ana Maria",
        "flavor" => "strawberry",
        "stock"  => 110
    ],
    [
        "name"   => "Ana Maria",
        "flavor" => "chocolate",
        "stock"  => 70
    ],
    [
        "name"   => "Fudge",
        "flavor" => "with banana",
        "stock"  => 80
    ]
];


/* =========================
   TRATAMENTO DE ERRO SIMPLES
========================= */
if (empty($offers)) {
    http_response_code(404);

    echo json_encode([
        "error" => "No offers available"
    ], JSON_PRETTY_PRINT);

    exit;
}


/* =========================
   RESPOSTA DA API
========================= */
$response = [
    "status"       => "success",
    "store"        => $store,
    "totalOffers"  => count($offers),
    "bestSellers"  => $bestSellers,
    "offers"       => $offers
];

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);