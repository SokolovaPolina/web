<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    
</head>
<body>
    <h1>Список всех продуктов</h1>
<table border='1'>
    
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Категория</th>
        <th>Общая стоимость</th>
    </tr>
    <?php foreach ($products as $id => $product): ?>
    <tr>
        <td><a href="/product/<?= $id ?>/"><?= $id; ?></a></td>
        <td><a href="/product/<?= $id ?>/"><?= $product['name']; ?></a></td>
        <td><?= $product['price']; ?>$</td>
        <td><?= $product['quantity']; ?></td>
        <td><?= $product['category']; ?></td>
        <td><?= $product['price'] * $product['quantity']; ?>$</td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>