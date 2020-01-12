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
            <div class="container">
                <div class="col-lg-4">
                    <form action="#" method="post">
                        <p>Название</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $user['name']; ?>">
                        <p>Email</p>
                        <input type="text" name="email" placeholder="" value="<?php echo $user['email']; ?>">
                        <p>Логин</p>
                        <input type="text" name="password" placeholder="" value="<?php echo $user['password']; ?>">
                        <p>Пороль</p>
                        <input type="text" name="role" placeholder="" value="<?php echo $user['role']; ?>">
                        <p></p>
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                    </form>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php include ROOT . '/views/layouts/footer 2.php'; ?>
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2542/jquery.scrollie.min_1.js"></script>
        <script type="text/javascript" src="/assets/js/hed.js"></script>
    </body>
</html>