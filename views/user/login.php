<!DOCTYPE HTML>

<html>
	<head>
		<title>Библиотека</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2542/jquery.scrollie.min_1.js"></script>
		<script type="text/javascript" src="/assets/js/hed.js"></script>
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="/assets/css/main.css" />
		<link rel="stylesheet" href="/assets/css/style.css">
	</head>
	<body>
		<div id="wrapper">

			<!-- Header -->
				<?php include ROOT . '/views/layouts/header.php'; ?>
			
			<!-- Main -->				
			<section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-4 padding-right">
                            <?php if ($result): ?>
                                <p>Вы вошли!</p>
                            <?php else: ?>
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <div class="signup-form">
                                    <h2>Вход на сайт</h2>
                                    <h1></h1>
                                    <form action="#" method="post">
                                        <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                                        <h1></h1>
                                        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                                        <h1></h1>
                                        <input type="submit" name="submit" value="Вход" />
                                    </form>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

			<!-- Footer -->
				<?php include ROOT . '/views/layouts/footer 2.php'; ?>
				
		</div>
	</body>
</html>
