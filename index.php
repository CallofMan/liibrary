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

        <p class="head_elem">Все книги</p>
        <p class="head_elem">Буду читать</p>
        <p class="head_elem">Прочитано</p>

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

            <article class="book">
                
                <div class="img">

                    <img src="images/1451835669_andrea-guardino_lotr_hobbit_nazgul-king_2.jpg" alt="Не грузит" class="title_book">

                </div>
                
                <h2>"Гомо и трансвестит"</h2>
                <h3>Музей Эвклаптович</h3>
                <h4>24.01.2001</h4>    
                <header class="manipulation_book">

                    <img src="images/галочка.png" alt="Не грузит" class="read">
                    <input type="button" value="Конспект" class="comment">

                </header>

            </article>

            

        </main>
    </div>
</body>
</html>