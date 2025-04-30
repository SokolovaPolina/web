<h1><?= $h1; ?></h1>
<div id="content">
	<table>
		<tr>
			<th><strong>ID</strong></th>
			<th><strong>Название</strong></th>
			<th><strong>Ссылка</strong></th>
		</tr>
		<?php foreach ($pages as $page): ?>
		<tr>
			<td><?= $page['id']; ?></td>
			<td><?= $page['title']; ?></td>
			<td><a href="/page/<?= $page['id']; ?>/">ссылка на страницу</a></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>