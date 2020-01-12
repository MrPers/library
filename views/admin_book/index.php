<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
            <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="/assets/css/main.css" />
            <link rel="stylesheet" href="/assets/css/style.css">
        <title>Админпанель</title>
    </head>
    <body>
        <!-- Header -->
        <?php include ROOT . '/views/layouts/header.php'; ?>
        
        <!-- Main -->
        <div class="container">
            <div class="row">
            <a href="/admin/book/create" class="btn btn-default"> Добавить товар</a>
            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Дата</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
                <?php foreach ($booksList as $book): ?>
                    <tr>
                        <td><?php echo $book['ID']; ?></td>
                        <td><?php echo $book['name']; ?></td>
                        <td><?php echo $book['date']; ?></td>  
                        <td><a href="/admin/book/update/<?php echo $book['ID']; ?>" class="btn btn-default">Редактировать</a></td>
                        <td><a href="/admin/book/delete/<?php echo $book['ID']; ?>" class="btn btn-default">Удалить</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

        <!-- Footer -->
        <?php include ROOT . '/views/layouts/footer 2.php'; ?>
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2542/jquery.scrollie.min_1.js"></script>
        <script type="text/javascript" src="/assets/js/hed.js"></script>
    </body>
</html>
