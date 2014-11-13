<?php header("Content-type: text/html; charset='utf-8'"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="v/css/images/favicons/egor.ico">

    <title><?= $title?></title>
    <link href="v/css/bootstrap.min.css" rel="stylesheet">
    <link href="v/css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
      <div class="header">
				<ul class = "nav nav-pills pull-right">
					<? foreach($menu as $link => $item): ?>
						<? if ($item == $activeitem): ?>
							<li class="active"><a href = "<?= $link?>"><?= $item?></a></li>
						<? else: ?>
							<li><a href = "<?= $link?>"><?= $item?></a></li>
						<? endif ?>
					<? endforeach ?>
				</ul>
        <div class="container">
          <a href="/" class="lead hidden-xs">
            <img src="v/css/images/egor.png" width="30px" height="30px">
            Egor Voronov
          </a>
        </div>
      </div>

      <!-- Content -->
			<?= $body_content?>
      <!-- End of content -->

      <div class="footer">
        <p>&copy; Egor Voronov <?= date('Y')?></p>
      </div>
    </div>


    <script src="v/js/jquery.js"></script>
    <script src="v/js/bootstrap.min.js"></script>
  </body>
</html>