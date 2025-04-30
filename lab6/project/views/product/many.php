<h1><?= $h1; ?></h1>
<div id="content">
	<table>
		<tr>
			<th><strong>ID</strong></th>
			<th><strong>Название</strong></th>
			<th><strong>Ссылка</strong></th>
		</tr>
		<?php foreach ($products as $product): ?>
		<tr>
			<td><?= $product['id']; ?></td>
			<td><?= $product['name']; ?></td>
			<td><a href="/products/<?= $product['id']; ?>/">ссылка на страницу</a></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>