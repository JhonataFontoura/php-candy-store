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
/*Adição da variavel desconto */
$price    = 2;
$amount   = 5;
$discount = 0; 


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
    'fat'   => "32g", // atualizado
    'sugar' => "51g",
    'salt'  => "10g",
    'fiber' =>"6g",  // novo
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

/*==========================
   Precessando offers
========================== */ 
foreach ($offers as &$offer) {
    $offer['is_available'] = $offer['stock'] >= $ordered;
    $offer['can_buy'] = $offer['is_available'] && $deliver; 
}
/* =========================
   PROMOÇÕES POR DIA
========================= */
/*adição de desconto para cada dia em especifico */
$day = 'Monday';

switch ($day) {
    case 'Monday':
        $do_it = '20% off chocolate';
        $discount = 0.20;
        break;

    case 'Thursday':
        $do_it = '40% off white chocolate';
        $discount = 0.40; 
        break;

    case 'Friday': // corrigido (antes estava "fourth")
        $do_it = '15% when buying three';
        $discount = 0.15;
        break;

    default:
        $do_it = 'Buy three packs, get one free';
        $discount = 0; // sem desconto em porcentagem
}

/* =========================
   PROCESSANDO PRICING
========================= */
$pricing = [];

for ($counter = 1; $counter <= $amount; $counter++) {
    $total = $price * $counter;
    $finalPrice = $total * (1 - $discount);

    $pricing[] = [
        "quantity" => $counter,
        "total" => $total,
        "final" => $finalPrice,
        "promo" => $do_it
    ];
}
// Adicionando o texto correto (singular/plural)
foreach ($pricing as &$priceItem) {
    $priceItem['quantityText'] = $priceItem['quantity'] > 1 ? 'Quantities' : 'Quantity';
}
unset($priceItem);

     /*Contador com while 
     <?php $counter = 1; // deaclaração do counter no loop mesmo, se não mistura o valor do dado(data.php), com lógica. 
      
      while ($counter <= $amount){ 
        $total = $price * $counter;
        $finalPrice = $total * (1 - $discount);
        echo $counter; // mostra o valor atual do contador
        echo "packs cost: $ $total<br>"; // <br> fazendo quebra de linha
        echo "Promoção: {$do_it}<br><br>";
        $counter++;  // soma +1 evitando loop infinito
        }  
        ?>
        -->
     <!--Outra forma de fazer while
     <?php 
       $packs = 1; 

       do {
         $total = $price * $packs; 
         $finalPrice = $total * (1 - $discount);

         echo "{$packs}<br>";
         echo "packs cost: $ {$total}<br>";
         echo "Promoção: {$do_it}<br><br>";

         $packs++;

        } while ($packs <= $amount); 
     ?> */