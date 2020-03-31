<?php

    require_once "connection.php";

    $name = $_POST['name_book'];
    $author = $_POST['author_book'];
    $annotation = $_POST['annotation'];
    $comment = $_POST['comment'];
    $date_of_writing = $_POST['date_of_writing'];
    $date_of_added = date("Y-m-d");
    $status = $_POST['status'];
    $title = $_FILES['title']['tmp_name'];

    $query = mysqli_query($connect, "INSERT INTO books VALUES (NULL, '$name', '$author', '$date_of_added', '$date_of_writing', '$annotation', '$comment', $status)");

    $query = mysqli_query($connect, "SELECT id FROM books ORDER BY id DESC LIMIT 1");
    $id = mysqli_fetch_array($query);
    $id = $id[0];

    if ($title)
    {
        $data = addslashes(fread(fopen($title, "r"), 
        filesize($title)));
    
        $size = filesize($title);
    
        $result=$connect->prepare("INSERT INTO images (id, image, size_image, type_image) 
        "."VALUES (".$id.",
        '".$data."',
        '".$size."',
        '".$_FILES["title"]["type"]."')");
        
        if(!$result) exit("Ошибка выполнения SQL запроса!");

        $result->execute();
    }
    else
    {
        $query = mysqli_query($connect, "INSERT INTO images VALUES ($id, NULL, NULL, NULL)");
    }
    

    header ("Location: form_add.php");