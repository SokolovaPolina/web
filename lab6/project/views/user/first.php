<h1>Список пользователей</h1>
<?php foreach ($users as $id => $user): ?>
<p>
    <b>ID: </b><?= $id ?> |
    <b>Имя: </b><?= $user['name'] ?> |
    <b>Возраст: </b><?= $user['age'] ?> |
    <b>Зарплата: </b><?= $user['salary'] ?></p><hr>
    <?php endforeach; ?>
    
    <p><a href="/users/all/">Показать всех</a></p>
