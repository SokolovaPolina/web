<?php
require_once "NewsDB.class.php";

$news = new NewsDB();

// Переменная для хранения сообщений об ошибках
$errMsg = "";

// Проверяем, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require "save_news.inc.php";
}

// Проверяем запрос на удаление новости
if (isset($_GET['del'])) {
    require "delete_news.inc.php";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Новостная лента</title>
	<meta charset="utf-8">
	
	<style>
      
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f5f5f5;
      color: #660066;
      line-height: 1.6;
    }
    
    h1, h2 {
      color: #660066;
      border-bottom: 2px solid #993399;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }
    
    .container {
    display: flex;
    justify-content: space-between;
    }
    
    .form-section {
    width: 40%; /* Ширина формы заполнения */
    }

    .news-section {
        width: 55%; /* Ширина для последних новостей */
    }

    
    /* Стили для формы */
    form {
      background-color: white;
      padding: 20px;
      border-radius: 18px;
      box-shadow: 0 4px 8px #993399;
      margin-bottom: 20px;
      color: #660066;
    }
    
    input[type="text"], textarea, select {
      width: 100%;
      padding: 5px;
      margin-bottom: 15px;
      border: 1px solid #660066;
      border-radius: 4px;
      font-family: inherit;
      font-size: 1rem;
      color: #993399;
    }
    
    input[type="submit"] {
      background-color: #660066;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
    }
    
    input[type="submit"]:hover {
      background-color: #e09a3c;
    }
    
    
    /* Стили для новостей */
    .news-container {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    
    .news-item {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px #993399;
    }
    
    .news-item h3 {
      color: #660066;
      margin-top: 0;
      margin-bottom: 10px;
    }
    
    .news-meta {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      margin-bottom: 10px;
      font-size: 0.9rem;
      color: #666;
    }
    
    .news-text {
      margin-bottom: 15px;
    }
    
    .news-actions {
      text-align: right;
    }
    
    .delete-button {
      background-color: #660066;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
      display: inline-block;
    }
    
    .delete-button:hover {
      background-color: #bd2130;
    }
    
    /* Стили для сообщений */
    .error-message {
      background-color: #660066;
      color: white;
      padding: 10px;
      border-radius: 4px;
      margin-bottom: 20px;
      
      
    }
  </style>
</head>
<body>
<div class='container'>
    <div class="news-section">
  <h1>Последние новости</h1>
  <?php
//   // Выводим сообщение об ошибке, если оно есть
//   if (!empty($errMsg)) {
//       echo "<div class='error-message'>{$errMsg}</div>";
//   }
  
  // Выводим новости
  require "get_news.inc.php";
  ?>
  </div>
  
      <div class="form-selection">
          
          <h1>Создание новости</h1>
          
          <?php
        
  // Выводим сообщение об ошибке, если оно есть
  if (!empty($errMsg)) {
      echo "<div class='error-message'>{$errMsg}</div>";
  }
        ?>
          <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            Заголовок новости:<br>
            <input type="text" name="title"><br>
            Выберите категорию:<br>
            <select name="category">
            <?php foreach ($news as $id => $name): ?>
                    <option value="<?= htmlspecialchars($id) ?>"><?= htmlspecialchars($name) ?></option>
                <?php endforeach; ?>
            </select>
            <br />
            Текст новости:<br>
            <textarea name="description" cols="50" rows="5"></textarea><br>
            Источник:<br>
            <input type="text" name="source"><br>
            <br>
            <input type="submit" value="Добавить!">
          </form>
          </div>

    </div>
  <?php

  ?>
</body>
</html>