<?php

    require_once "connection.php";
    
    $choiceCategory = isset($_GET['choiceCategory']) ? $_GET['choiceCategory'] : 3;

    switch ($choiceCategory)
    {
        case 1: $query = mysqli_query($connect, "SELECT id, name, author, date_of_writing FROM books WHERE status = 1");    break;
        case 2: $query = mysqli_query($connect, "SELECT id, name, author, date_of_writing FROM books WHERE status = 0");    break;
        case 3: $query = mysqli_query($connect, "SELECT id, name, author, date_of_writing FROM books");                     break;
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

        ';
                if ($queryImage)
                {
                    echo '<img src="data:' . $queryImage['type_image'] . ';base64,' . base64_encode($queryImage['image']) . '" alt="Не грузит" class="title_book">';
                }
        echo
        '
            </div>
            
            <h2>"' . $row['name'] . '"</h2>
            <h3>' . $row['author'] . '</h3>
            <h4>' . $row['date_of_writing'] . '</h4>    
            <header class="manipulation_book">

                <img src="images/галочка.png" alt="Не грузит" class="read">
                <input type="button" value="Конспект" class="comment">

            </header>

            </article>
        ';
    }
    