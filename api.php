<?php
// =========================
// HEADER DE RESPOSTA
// =========================
header("Content-Type: application/json; charset=utf-8");

// =========================
// CONFIGURAÇÃO DA LOJA
// =========================
$store = "Candy Store";

// =========================
// PRODUTOS MAIS VENDIDOS
// =========================
$bestSellers = [
    "Chocolate",
    "Mints",
    "Fudge",
    "Bubble gum",
    "Toffee",
    "Jelly beans"
];

// =========================
// OFERTAS DISPONÍVEIS
// =========================
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

// =========================
// CONFIGURAÇÃO DE COMPRA
// =========================
$ordered = 80;   // quantidade mínima para liberar compra
$deliver = true; // se a entrega está disponível

// =========================
// PROCESSAR OFERTAS
// =========================
foreach ($offers as &$offer) {
    $offer['available'] = ($offer['stock'] >= $ordered) && $deliver ? true : false;
}
unset($offer); // quebra referência

// =========================
// VERIFICAR ERROS
// =========================
if (empty($offers)) {
    http_response_code(404);
    echo json_encode([
        "status" => "error",
        "message" => "No offers available"
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    exit;
}

// =========================
// RESPOSTA FINAL
// =========================
$response = [
    "status"      => "success",
    "store"       => $store,
    "totalOffers" => count($offers),
    "bestSellers" => $bestSellers,
    "offers"      => $offers
];

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);