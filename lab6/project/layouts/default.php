<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/project/webroot/styles.css">
    <title><?= $title ?></title>
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #660066;
            color: white;
            padding: 2rem 0;
            text-align: center;
            border-bottom: 4px solid #993399;
        }

        h1, h2, h3 {
            color: #660066;
            text-align: left;
            
        }

        b {
            color: #993399;
        }

        .container {
            display: flex;
            margin: 2rem;
            flex-direction: row;
            flex-wrap: wrap;
        }

        aside.sidebar {
            width: 20%;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 1rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        main {
            flex: 1;
            margin: 0 1rem;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 2rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        
        p a {
           text-decoration: none;
            color: #660066;
            transition: color 0.3s; 
        }
        
        p a:hover {
            color: #993399;
        }
        
        a {
           text-decoration: none;
            color: #660066;
            transition: color 0.3s; 
        }
        
        a:hover {
            color: #FFFFFF;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            margin: 1rem 0;
            position: relative;
        }

        nav ul li a {
            text-decoration: none;
            color: #660066;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #993399;
        }

        .sub-menu {
            display: none;
            margin-left: 15px;
            background-color: #f9f9f9;
            border-left: 3px solid #993399;
            padding: 1rem;
            border-radius: 3px;
        }

        nav ul li:hover .sub-menu {
            display: block;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 2rem 0;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #993399;
        }
        th {
            background-color: #660066;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #993399;
            color: white;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #660066;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 2rem;
        }
         .header-image {
            width: 70px; 
            height: auto; 
            vertical-align: middle; 
            margin-right: 1rem;
            display: inline-block;
        }
        
         .image-container {
            text-align: center;
            margin: 20px 0;
        }

        .image-container img {
            max-width: 80%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }
        @media (max-width: 400px) {
    .container {
        flex-direction: column;
    }

    aside.sidebar {
        width: 100%;
        margin-bottom: 20px;
    }

    main {
        margin: 0;
    }
}

    @media (max-width: 400px) {
        header h1 {
            font-size: 24px;
        }
    
        footer {
            font-size: 14px;
        }
    }

    </style>
</head>
<body>
    <header>
        <h1 style="color: #FFFFFF; text-align: center; padding: 10px 0 0 0;">MVC Фреймворк <img src="/project/webroot/cat.png" class="header-image"></h1>
        
        
    </header>
    <div class="container">
        <aside class="sidebar left">
            <nav>
                <ul>
                    <li><a href="/hello/"><h3>Главная</h3></a></li>
                    <li><a href="#"><h3>Тесты</h3></a>
                        <ul class="sub-menu">
                            <li><a href="/test/act1">Тест 1</a></li>
                            <li><a href="/test/act2">Тест 2</a></li>
                            <li><a href="/test/act3">Тест 3</a></li>
                            <li><a href="/test/act/">Тест 4</a></li>
                        </ul>
                    </li>
                    <li><a href="/nums/:n1/:n2/:n3"><h3>Калькулятор</h3></a></li>
                    <li><a href="/pages/"><h3>Список страниц</h3></a></li>
                </ul>
            </nav>
        </aside>
        <main>
            <?= $content ?>
            <div class="image-container">
                <img src="/project/webroot/fl.jpg" alt="Описание изображения">
            </div>
        </main>
        <aside class="sidebar right">
            <nav>
            <ul>
                <li><a href="/user/first/2"><h3>Список пользователей</h3></a></li>
                <li><a href="/products/all/"><h3>Список продуктов</h3></a></li>
                <li><a href="/products/"><h3>Список товаров</h3></a></li>
            </ul>
            </nav>
            
        </aside>
    </div>
    <footer>
        <p styly="color:#e4e3e9"> Sokolova Polina 11MO </p>
    </footer>
</body>
</html>
