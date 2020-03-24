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
        <form action="#" method="POST" id="form_container">
            <h1>Добавление книги</h1>

            <input type="text" class="input" id="name_book" autofocus placeholder="Введите название книги" required>
            <input type="text" class="input" id="author_book" placeholder="Введите автора книги" required>
            <textarea id="annotation" class="input" placeholder="Напишите аннотацию" required></textarea>
            <textarea id="annotation" class="input" placeholder="Оставьте личные мысли о прочитанном"></textarea>
            
            <div class="example-2">
                <div class="form-group">
                    <input type="file" name="file" id="file" class="input-file">
                    <label for="file" class="btn btn-tertiary js-labelFile">
                    <i class="icon fa fa-check"></i>
                    <span class="js-fileName">Загрузить обложку</span>
                    </label>
                </div>
            </div>

            <input type="date" class="input" id="date_of_read" placeholder="Дата прочтения">

            <article>
                <article>
                    <input type="radio" name="read" id="readed"><label for="readed">Прочитал</label>
                </article>
                
                <article>
                    <input type="radio" name="read" id="dont_readed"><label for="dont_readed">Не читал</label>
                </article>

                <article>
                    <input type="radio" name="read" id="is_reading"><label for="is_reading">Читаю</label>
                </article>
            </article>
            
            <input type="button" class="input" value="Добавить">
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