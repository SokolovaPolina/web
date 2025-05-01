<h1>Продукт "<?php echo $product['name']; ?>" из категории "<?php echo $product['category']; ?>"</h1>
<p>
    <b>Цена:</b> <?php echo $product['price']; ?>, <b>количество:</b> <?php echo $product['quantity']; ?>
</p>
<p>
    <b>Стоимость (цена * количество):</b> <?php echo $product['price'] * $product['quantity']; ?>$
</p>


