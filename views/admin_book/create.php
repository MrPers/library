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
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <form action="#" method="post" enctype="multipart/form-data">

                    <p>Название</p>
                    <input type="text" name="name" placeholder="" value="">

                    <p>Жанор</p>
                    <select name="ID_genre">
                        <?php if (is_array($categoriesList)): ?>
                            <?php foreach ($categoriesList as $category): ?>
                                <option value="<?php echo $category['id']; ?>">
                                    <?php echo $category['name']; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>

                    <p>Автор</p>
                    <select name="ID_autor">
                        <?php if (is_array($autorsList)): ?>
                            <?php foreach ($autorsList as $autor): ?>
                                <option value="<?php echo $autor['ID']; ?>">
                                    <?php echo $autor['Full_name']; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>

                    <p>Изображение</p>
                    <input type="file" name="image" placeholder="" value="">

                    <p>Описание</p>
                    <textarea name="content"></textarea>

                    <br/><br/>

                    <input type="submit" name="submit" class="btn btn-default" value="Сохранить">

                </form>
            </div>
        </section>

        <!-- Footer -->
        <?php include ROOT . '/views/layouts/footer 2.php'; ?>
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2542/jquery.scrollie.min_1.js"></script>
        <script type="text/javascript" src="/assets/js/hed.js"></script>
    </body>
</html>

