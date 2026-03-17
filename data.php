<?php 
/* ==================================================
1️⃣ VARIÁVEIS E CONCATENAÇÃO
================================================== */

$forename = "Jhonata";
$surname = "Nunes";

$name = $forename . ' ' . $surname; // concatenação


/* ==================================================
2️⃣ CÁLCULO DE PREÇO
================================================== */

$price = 4;
$amount = 3;

$subtotal = ($price * $amount) * 0.20;


/* ==================================================
3️⃣ CONFIGURAÇÃO DE COMPRA
================================================== */

$ordered = 80;
$deliver = true;



/* ==================================================
4️⃣ ITEM PRINCIPAL
================================================== */

$item = "Ana Maria";


/* ==================================================
5️⃣ ARRAY ASSOCIATIVO (VALORES NUTRICIONAIS)
================================================== */

$nutrition = [
    'fat' => 16,
    'sugar' => 51,
    'salt' => 10,
];

$nutrition['fat'] = 32; // atualização
$nutrition['fiber'] = 6; // novo elemento


/* ==================================================
6️⃣ ARRAY INDEXADO (MAIS VENDIDOS)
================================================== */

$best_sellers = ['Chocolate', 'Mints', 'Fudge', 'Bubble gum', 'Toffe', 'Jelly beans'];


/* ==================================================
8️⃣ ARRAY MULTIDIMENSIONAL (OFERTAS)
================================================== */

$offers = [
    ['name' => 'Ana Maria', 'flavor' => 'strawberry', 'stock' => 110],
    ['name' => 'Ana Maria', 'flavor' => 'chocolate', 'stock' => 70],
    ['name' => 'Fudge', 'flavor' => 'with banana', 'stock' => 80],
];

/* ==================================================
 Usando Declarações Switch 
================================================== */
$day = 'Monday';

switch ($day) {
    case 'Monday':
        $do_it = '20% off chocolate';
        break;
    case 'Thursday':
        $do_it = '20% off white chocolate';
        break;
    case 'fourth':
        $do_it = '15% when buying three';
        break;
    default:
        $do_it = 'Buy three packs, get one free';
}

?>