<h1>Список пользователей</h1>
    
    
    <?php foreach ($users as $id => $user): ?>
    <p>
                    <a href="/user/<?= $id; ?>/"><b>ID: </b><?= $id ?></a> |
                    <a href="/user/<?= $id ?>/<?= $key='name'; ?>/"><b>Имя: </b><?= $user['name'] ?></a> |
                    <a href="/user/<?= $id ?>/<?= $key='age'; ?>/"><b>Возраст: </b><?= $user['age'] ?></a> |
                    <a href="/user/<?= $id ?>/<?= $key='salary'; ?>/"><b>Зарплата: </b><?= $user['salary'] ?></a><hr>
    <?php endforeach; ?>