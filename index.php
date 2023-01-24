<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Вариант12</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap.css"/>
    </head>
    <body style="background: #e1b7bf">     
        <div class="container" style="background: #59437a; color: white; width: 30em; padding: 30px;">
            <h1>Форма обратной связи</h1>
            <form id="feedback" method="post">
                <hr>
                <label for="fullname" class="form-label">Введите ФИО:</label>
                <input id="fullname" type="text" class="form-control" placeholder="ФИО">
                <label for="theme" class="form-label">Введите тему:</label>
                <input id="theme" type="text" class="form-control" placeholder="Тема">
                <label for="phone" class="form-label">Введите телефон:</label>
                <input id="phone" type="text" class="form-control" placeholder="Телефон">
                <hr>
                <input type="button" class="btn btn-danger" value="Отправить" onclick="addFeedback()"/>
            </form> 
        </div>   
        <script src="validation.js"></script>
    </body>
</html>