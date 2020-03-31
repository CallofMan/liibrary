<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_add_form.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>Добавление книги</title>
</head>
<body>

    <a href="index.php" class="back">Назад</a>

    <section id="container">
        <form action="adding_book_script.php" enctype="multipart/form-data" method="POST" id="form_container">
            <h1>Добавление книги</h1>

            <input type="text" name="name_book" class="input" autofocus placeholder="Введите название книги" required>
            <input type="text" name="author_book" class="input" placeholder="Введите автора книги" required>
            <textarea name="annotation" class="input" placeholder="Напишите аннотацию" required></textarea>
            <textarea name="comment" class="input" placeholder="Оставьте личные мысли о прочитанном"></textarea>
            
            <input type="date" name="date_of_writing" class="input" required>

            <div class="example-2">
                <div class="form-group">
                    <input type="hidden" name="MAX_FILE_SIZE" value="50000000">
                    <input type="file" name="title" id="file" class="input-file">
                    <label for="file" class="btn btn-tertiary js-labelFile">
                    <i class="icon fa fa-check"></i>
                    <span class="js-fileName">Загрузить обложку</span>
                    </label>
                </div>
            </div>

            <article>
                <article>
                    <input type="radio" value="1" name="status" required><label for="read">Прочитал</label>
                </article>
                
                <article>
                    <input type="radio" value="0" name="status" required><label for="dont_read">Буду читать</label>
                </article>
            </article>
            
            <input type="submit" name="submit" class="input" value="Добавить">
        </form>
    </section>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        (function() {
   
        'use strict';
        
        $('.input-file').each(function() {
            var $input = $(this),
                $label = $input.next('.js-labelFile'),
                labelVal = $label.html();
            
            $input.on('change', function(element) {
            var fileName = '';
            if (element.target.value) fileName = element.target.value.split('\\').pop();
            fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
            });
        });
        
        })();
    </script>
</body>
</html>