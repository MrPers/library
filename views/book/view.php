<!DOCTYPE HTML>

<html>
	<head>
		<title>Библиотека</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

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
                <h1></h1>
                <div class="container text">
                    <div class="row">
                        <div class="col-sm-9 padding-right">
                            <div class="product-details">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="view-book">
										<img src="<?php echo Book::getImage($book['0']); ?>" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="product-information">
                                            <h2><?php echo $book['name']; ?></h2>
                                            <p>Автор: <?php echo $book['Full_name']; ?></p>
                                            <p>Жанр: <?php echo $book['gname']; ?></p>
                                            <p><div class="rating" id="<?php echo $book["0"];?>">
                                            <?php if(User::checkLogged()){ ?>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            <?php } ?> 
                                            <div id="star_rating">
                                            Рейтинг: <?php echo round($rating["points"], 1);?>
                                            </div>
                                            <div id="star_votes">
                                            Оценили: <?php echo $rating["votes"];?>
                                            </div>
                                            </div>
                                            <div id="star_message"></div></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">                                
                                    <div class="col-sm-12">
                                        <br/>
                                        <h5>Описание: </h5>
                                        <?php echo $book['content']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

			<!-- Footer -->
            <?php include ROOT . '/views/layouts/footer 2.php'; ?>
        </div>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		    <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2542/jquery.scrollie.min_1.js"></script>
            <script type="text/javascript" src="/assets/js/hed.js"></script>
    </body>
</html>