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

        <section>
            <div class="container content">
                <table class="table-bordered table-striped table">
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Логин</th>
                        <th>Пороль</th>
                        <th>Название</th>
                        <th>Редактировать</th>
                        <th>Удалить</th>
                    </tr>
                    <tr>
                    <?php foreach ($categoriesList as $category): ?>
                        <td><?php echo $category['ID']; ?></td>
                        <td><?php echo $category['email']; ?></td>
                        <td><?php echo $category['name']; ?></td>
                        <td><?php echo $category['password']; ?></td>
                        <td><?php echo $category['role']; ?></td>
                        <td><a href="/admin/user/update/<?php echo $category['ID']; ?>" class="btn btn-default">Редактировать</a></td>
                        <td><a href="/admin/user/delete/<?php echo $category['ID']; ?>" class="btn btn-default">Удалить</a></td>

                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </section>

        <!-- Footer -->
        <?php include ROOT . '/views/layouts/footer 2.php'; ?>
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2542/jquery.scrollie.min_1.js"></script>
        <script type="text/javascript" src="/assets/js/hed.js"></script>
    </body>
</html>

