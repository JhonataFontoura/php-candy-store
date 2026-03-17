<?php require "data.p"; ?>

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
