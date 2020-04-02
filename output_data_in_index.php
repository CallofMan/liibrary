<?php

    require_once "connection.php";
    
    $choiceCategory = isset($_GET['choiceCategory']) ? $_GET['choiceCategory'] : 3;

    switch ($choiceCategory)
    {
        case 1: $query = mysqli_query($connect, "SELECT id, name, author, annotation, date_of_writing FROM books WHERE status = 1 ORDER BY id DESC");    break;
        case 2: $query = mysqli_query($connect, "SELECT id, name, author, annotation, date_of_writing FROM books WHERE status = 0 ORDER BY id DESC");    break;
        case 3: $query = mysqli_query($connect, "SELECT id, name, author, annotation, date_of_writing FROM books ORDER BY id DESC");                     break;
    }

    while ($row = mysqli_fetch_assoc($query))
    {
        $id = $row['id'];
        $queryImage = mysqli_query($connect, "SELECT image, type_image FROM images WHERE id = $id");
        $queryImage = mysqli_fetch_assoc($queryImage);

        echo 
        '
            <article class="book">
            
                <div class="img">

                    <p>' . $row['annotation'] . '</p>

                    <img src="data:' . $queryImage['type_image'] . ';base64,' . base64_encode($queryImage['image']) . '" alt="Нет обложки" class="title_book">

                </div>
            
            <h2>"' . $row['name'] . '"</h2>
            <h3>' . $row['author'] . '</h3>
            <h4>' . $row['date_of_writing'] . '</h4>    
            <header class="manipulation_book">

                <input type="button" value="Детальное описание" class="comment">

            </header>

            </article>
        ';
    }
    