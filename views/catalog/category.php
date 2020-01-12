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
			<div class="container content">
			<div class="row">
					<div class="col-md-4">
						<div class="list-group">
							<?php foreach ($categories as $categoryItem): ?>
									<a class="list-group-item" href="/category/<?php echo $categoryItem['id']; ?>">
										<?php echo $categoryItem['name']; ?>
									</a>
							<?php endforeach; ?>
						</div>
					</div>
                                                                        <h2 class="text">Книги</h2>
					<div class="col-md-8 products">     
						<?php foreach ($categoryBooks as $book): ?>
							<div class="col-sm-4">
								<div class="product">
									<div class="product-img">
										<img src="<?php echo Book::getImage($book['ID']); ?>" alt="" />
									</div>
									<p class="product-title  otctup">
										<a href="/book/<?php echo $book['ID']; ?>">
											<?php echo "<br><br><br><br><br><br>". $book['name']; ?>
										</a>
									</p>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>


            <!-- Footer -->
            <?php include ROOT . '/views/layouts/footer 2.php'; ?>

        </div>
    </body>
</html>
