<?php

/* =========================
   DADOS DO USUÁRIO
========================= */
$forename = "Jhonata";
$surname  = "Nunes";

$name = "$forename $surname";


/* =========================
   PREÇOS
========================= */
$price    = 4;
$amount   = 3;
$subtotal = ($price * $amount) * 0.20;


/* =========================
   CONFIGURAÇÃO DE COMPRA
========================= */
$ordered = 80;
$deliver = true;


/* =========================
   PRODUTO PRINCIPAL
========================= */
$item = "Ana Maria";


/* =========================
   NUTRIÇÃO
========================= */
$nutrition = [
    'fat'   => 32, // atualizado
    'sugar' => 51,
    'salt'  => 10,
    'fiber' => 6,  // novo
];


/* =========================
   MAIS VENDIDOS
========================= */
$best_sellers = [
    'Chocolate',
    'Mints',
    'Fudge',
    'Bubble gum',
    'Toffe',
    'Jelly beans'
];


/* =========================
   OFERTAS
========================= */
$offers = [
    ['name' => 'Ana Maria', 'flavor' => 'strawberry', 'stock' => 110],
    ['name' => 'Ana Maria', 'flavor' => 'chocolate',  'stock' => 70],
    ['name' => 'Fudge',     'flavor' => 'with banana','stock' => 80],
];


/* =========================
   PROMOÇÕES POR DIA
========================= */
$day = 'Monday';

switch ($day) {
    case 'Monday':
        $do_it = '20% off chocolate';
        break;

    case 'Thursday':
        $do_it = '20% off white chocolate';
        break;

    case 'Friday': // corrigido (antes estava "fourth")
        $do_it = '15% when buying three';
        break;

    default:
        $do_it = 'Buy three packs, get one free';
}