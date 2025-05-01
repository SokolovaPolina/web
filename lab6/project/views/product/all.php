<h1>Список всех продуктов</h1>
<table>
    
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