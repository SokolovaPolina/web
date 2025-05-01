<h1>Список пользователей</h1>
    
    
    <?php foreach ($users as $id => $user): ?>
    <p>
                    <b><a href="/user/<?= $id; ?>/">ID: </b><?= $id ?></a> |
                    <b><a href="/user/<?= $id ?>/<?= $key='name'; ?>/">Имя: </b><?= $user['name'] ?></a> |
                    <b><a href="/user/<?= $id ?>/<?= $key='age'; ?>/">Возраст: </b><?= $user['age'] ?></a> |
                    <b><a href="/user/<?= $id ?>/<?= $key='salary'; ?>/">Зарплата: </b><?= $user['salary'] ?></a><hr>
    <?php endforeach; ?>