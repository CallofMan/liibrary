<?php

    require_once "connection.php";

    $query = mysqli_query($connect, "SELECT id, name, author, date_of_writing FROM books");

    while ($row = mysqli_fetch_assoc($query))
    {
        echo 
        '
            <article class="book">
            
                <div class="img">

                <img src="" alt="Не грузит" class="title_book">

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
    