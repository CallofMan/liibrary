<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_index.css">
    <title>Моя библиотека</title>
</head>
<body>
    <header id="header">

        <p class="head_elem" id='all_books'>Все книги</p>
        <p class="head_elem" id='will_read'>Буду читать</p>
        <p class="head_elem" id='read'>Прочитано</p>

    </header>   

    <div id="container">
        <section id="functional_block">

            <section id="search_block">

                <input type="search" name="search" id="search" placeholder="Поиск">
                <input type="button" value="Найти" id="button_search">

            </section>
            
            <a href="form_add.php" class="add_book">Добавить книгу</a>

        </section>

        <main>
        
            <?php

                require_once "output_data_in_index.php";

            ?>

        </main>
    </div>

    <script src="ajax.js"></script>

</body>
</html>