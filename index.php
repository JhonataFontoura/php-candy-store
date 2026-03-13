<?php 
/* ==================================================
1️⃣ VARIÁVEIS E CONCATENAÇÃO
================================================== */

$forename = "Jhonata";
$surname = 'Nunes';

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

<!DOCTYPE html>
<html lang="en">

<head>
<title>Echo Command</title>
<link rel="stylesheet" href="css/styles.css">
</head>

<body>

<h1>The Candy Store</h1>

<!-- ==================================================
EXEMPLO 1 - echo tradicional
================================================== -->

<h2>Welcome <?php echo $name; ?></h2>


<!-- ==================================================
EXEMPLO 2 - echo curto
================================================== -->

<h3>Item: <?= $item ?></h3>


<!-- ==================================================
ARRAY ASSOCIATIVO
================================================== -->

<p>Fat: <?php echo $nutrition['fat']; ?></p>
<p>Sugar: <?php echo $nutrition['sugar']; ?></p>
<p>Salt: <?php echo $nutrition['salt']; ?></p>
<p>Fiber: <?php echo $nutrition['fiber']; ?></p>


<!-- ==================================================
STRING COM VARIÁVEL
================================================== -->

<p><?php echo "The price for each item is: $price"; ?></p>

<p>For every 3 purchased, the price is reduced: <?php echo $subtotal; ?></p>


<!-- ==================================================
ARRAY INDEXADO
================================================== -->

<h4>Best Sellers</h4>

<ul>

<li><?php echo $best_sellers[0]; ?></li>
<li><?php echo $best_sellers[1]; ?></li>
<li><?php echo $best_sellers[2]; ?></li>
<li><?php echo $best_sellers[3]; ?></li>
<li><?php echo $best_sellers[4]; ?></li>
<li><?php echo $best_sellers[5]; ?></li>

</ul>


<!-- ==================================================
FOREACH + ARRAY MULTIDIMENSIONAL
================================================== -->

<h5>Offers</h5>

<?php foreach ($offers as $offer) {

    // confirmar se pode comprar
    $buy = ($offer['stock'] >= $ordered) && $deliver;

?>

<p>

Item: <?= $offer['name'] ?> -
Flavor: <?= $offer['flavor'] ?> -
Stock: <?= $offer['stock'] ?> -

<br>

<!-- MÉTODO 1 - OPERADOR TERNÁRIO -->

<?= $offer["stock"] >= $ordered ? '✅ Available for order' : '❌ Not enough stock'; ?>


<!-- MÉTODO 2 - IF / ELSE (comentado para estudo) -->

<!--
<?php
/*if ($offer['stock'] >= $ordeered) { ?>
Available for large order
<?php } else { ?>
Not enough stock
<?php } 
*/
?>
-->
<!-- MÉTODO 3 - IF / ELSEIF (comentado para estudo) -->

<?php
/*
if ($offer['stock'] >= $wanted) {
    echo "Available for large order";
} elseif ($offer['stock'] > 0) {
    echo "Limited stock";
} else {
    echo "Out of stock";
}
*/
?>
<!-- MÉTODO 3 - IF / ELSEIF (comentado para estudo melhorado) -->
<!--<?= $offer['stock'] >= $wanted 
    ? 'Available for large order'
    : ($offer['stock'] > 0 ? 'Limited stock' : 'Out of stock'); ?>
    -->

<br>

<!-- TERNÁRIO SIMPLES -->

Liberado para compra: <?= $buy ? "Yes" : "No" ?>

</p>

<?php } ?>


<!-- ==================================================
FORMA LIMITADA (SEM FOREACH)
================================================== -->

<!--
<p>
<?php echo $offers[0]['name']; ?> -
Flavor: <?php echo $offers[0]['flavor']; ?> -
Stock: <?php echo $offers[0]['stock']; ?>
</p>

<p>
<?php echo $offers[1]['name']; ?> -
Flavor: <?php echo $offers[1]['flavor']; ?> -
Stock: <?php echo $offers[1]['stock']; ?>
</p>

<p>
<?php echo $offers[2]['name']; ?> -
Flavor: <?php echo $offers[2]['flavor']; ?> -
Stock: <?php echo $offers[2]['stock']; ?>
</p>
-->
<!-- ==================================================
Aplicação de swith 
================================================== -->
<p><?php echo "Ofers on $day = $do_it" ?></p>
</body>
</html>
