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
                <form action="#" method="post" enctype="multipart/form-data">
 
                    <p>Название</p>
                    <input type="text" name="name" placeholder="" value="<?php echo $book['name']; ?>">

                    <p>Жанор</p>
                    <select name="ID_genre">
                        <?php if (is_array($categoriesList)): ?>
                            <?php foreach ($categoriesList as $category): ?>
                                <option value="<?php echo $category['id']; ?>" 
                                    <?php if ($book['ID_genre'] == $category['id']) echo ' selected="selected"'; ?>>
                                    <?php echo $category['name']; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>

                    <p>Автор</p>
                    <select name="ID_autor">
                        <?php if (is_array($autorsList)): ?>
                            <?php foreach ($autorsList as $autor): ?>
                                <option value="<?php echo $autor['ID']; ?>"
                                <?php if ($book['ID_autor'] == $autor['ID']) echo ' selected="selected"'; ?>>
                                    <?php echo $autor['Full_name']; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>

                    <p>Изображение</p>
                    <img src="<?php echo Book::getImage($book['ID']); ?>" width="200" alt="" />
                    <input type="file" name="image" placeholder="" value="<?php echo $autor['ID']; ?>">

                    <p>Описание</p>
                    <textarea name="content"><?php echo $book['content']; ?></textarea>
                    <br></br>
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