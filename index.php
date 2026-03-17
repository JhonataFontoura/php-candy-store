<?php require "data.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Echo Command</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <h1>The Candy Store</h1>

    <h2>Welcome <?= $name; ?></h2>

    <h3>Item: <?= $item; ?></h3>

    <h4>Nutrition Information</h4>
    <p>Fat: <?= $nutrition['fat']; ?></p>
    <p>Sugar: <?= $nutrition['sugar']; ?></p>
    <p>Salt: <?= $nutrition['salt']; ?></p>
    <p>Fiber: <?= $nutrition['fiber']; ?></p>

    <h4>Pricing</h4>
    <p>The price for each item is: <?= $price; ?></p>
    <p>Discounted subtotal: <?= $subtotal; ?></p>

    <h4>Best Sellers</h4>
    <ul>
        <?php foreach ($best_sellers as $product): ?>
            <li><?= $product; ?></li>
        <?php endforeach; ?>
    </ul>

    <h4>Offers</h4>

    <?php foreach ($offers as $offer): 
        $buy = ($offer['stock'] >= $ordered) && $deliver;
    ?>

        <p>
            Item: <?= $offer['name']; ?> -
            Flavor: <?= $offer['flavor']; ?> -
            Stock: <?= $offer['stock']; ?>
            <br>

            <?= $offer['stock'] >= $ordered 
                ? '✅ Available for order' 
                : '❌ Not enough stock'; ?>

            <br>

            Liberado para compra: <?= $buy ? "Yes" : "No"; ?>
        </p>

    <?php endforeach; ?>

    <h4>Offers of the Day</h4>
    <p>Offers on <?= $day; ?> = <?= $do_it; ?></p>

</body>
</html>