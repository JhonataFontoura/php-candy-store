<?php require "require/data.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Echo Command</title>
  <link rel="stylesheet" href="css/styles.css" />
</head>

<body>

  <?php require "includes/header.php"; ?>

  <main>
    <div class="container">

      <h2>Welcome <?= $name; ?></h2>

      <h3>Nutrition Information
        <table>
            <thead>
                <tr>
                    <th>Nutrition</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fat</td>
                    <td><?= $nutrition['fat']; ?></td>
                </tr>
                <tr>
                    <td>Sugar</td>
                    <td><?= $nutrition['sugar']; ?></td>
                </tr>
                <tr>
                    <td>Salt</td>
                    <td><?= $nutrition['salt']; ?></td>
                </tr>
            </tbody>
        </table>
        
      </h3>

      <h4>Pricing</h4>
      <p>The price for each item is: <?= $price; ?></p>

      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>Quantity</th>
              <th>Total</th>
              <th>Promotion</th>
              <th>Final Price</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pricing as $priceItem): ?>
              <tr>
                <td><?= $priceItem["quantity"]; ?> <?= $priceItem["quantityText"]; ?></td>
                <td>$<?= $priceItem["total"]; ?></td>
                <td><?= $priceItem["promo"]; ?></td>
                <td>$<?= $priceItem["final"]; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <h4>Best Sellers</h4>
      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>Product</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($best_sellers as $product): ?>
              <tr>
                <td><?= $product; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <h4>Offers</h4>
      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>Item</th>
              <th>Flavor</th>
              <th>Stock</th>
              <th>Status</th>
              <th>Available to Buy</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($offers as $offer): ?>
              <tr>
                <td><?= $offer["name"]; ?></td>
                <td><?= $offer["flavor"]; ?></td>
                <td><?= $offer["stock"]; ?></td>
                <td>
                  <?= $offer["is_available"]
                    ? "Available"
                    : "Not enough"; ?>
                </td>
                <td><?= $offer["can_buy"] ? "Yes" : "No"; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <h4>Offers of the Day</h4>
      <p>Offers on <?= $day; ?> = <?= $do_it; ?></p>

    </div>
  </main>

  <?php require "includes/footer.php"; ?>

</body>
</html>
