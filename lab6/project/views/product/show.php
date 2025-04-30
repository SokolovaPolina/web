<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    
    
</head>
<body>
    
<h1>Продукт "<?php echo $product['name']; ?>" из категории "<?php echo $product['category']; ?>"</h1>
<p>
    <b>Цена:</b> <?php echo $product['price']; ?>, <b>количество:</b> <?php echo $product['quantity']; ?>
</p>
<p>
    <b>Стоимость (цена * количество):</b> <?php echo $product['price'] * $product['quantity']; ?>$
</p>

</body>
</html>

