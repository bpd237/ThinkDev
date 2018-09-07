<!DOCTYPE html>
<html>
	<head>
		<title><?= App::getInstance()->title; ?></title>

		<meta charset="utf-8" /> <!-- Encodage des carractères de la page -->
		<meta name="robots" content="noarchive">
		<meta name="description" content="<?= App::getInstance()->desc_page; ?>">

		<link rel="icon" href="../Data/ico/favicon.ico" /> <!-- Icone de la page -->

		<link rel="stylesheet" type="text/css" href="widgEditor/css/widgEditor.css" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style_admin.css">
		
		<script src="widgEditor/scripts/widgEditor.js"></script>
	</head>

	<body>

		<header>
			<div class="dessus">
				<div class="logo">
					<a href="index.php"><img class="img-rounded" src="../Data/logo.png"  width="120px" height="50px" alt="" /></a>
				</div>
				<div class="search pull-right">
					<form method="post" class="search form-inline">
						<div class="form-group">
							<div class="input-group">
								<input type="search" name="search" id="search" class="search_input" placeholder="Search An Article" />
								<div class="input-group-addon"><img src="../Data/page/search.png" class="img-rounded" width="30px" height="30px"></div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</header>

		<div id="page">
			<div id="left">
				<nav class="left">
					<a href="index.php?p=page.user.profil">
						<div class="pp">
							<img src="<?= $_COOKIE['pp']; ?>" width="95%" height="130px" class="img-circle" alt="Profile Picture" title="Profile Picture" />
							<p class="pp_pseudo"> <?= $_COOKIE['pseudo']; ?> </p>
						</div>
					</a>
					<ul>
						<a href="index.php?p=page.user.profil"><li>Your Profile</li></a>
						<a href="#"><li>Progress</li></a>
						<a href=""><li style="margin-top: 35px; padding: 0;">
							<form action="?p=page.user.disconnect" method="post" style="display:inline;">
								<input type="hidden" name="id" value="<?= $posts->id; ?>">
								<button type="submit"><i class="fa fa-unlock"></i>     Log Out</button>
							</form>
						</li></a>
					</ul>
				</nav>
			</div>

			<div id="content">
				<?php if(isset($_GET['error'])): ?>
					<?php if($_GET['error'] == 'file'): ?>
						<div class="alert alert-danger" style="text-align:center; max-width:350px; border-radius:10px;"><strong>File errors!!</strong></div>
					<?php endif; ?>
				<?php endif; ?>
				<?php if(isset($_GET['m'])): ?>
					<?php if($_GET['m'] == 'ok'): ?>
						<div class="alert alert-success" style="text-align:center; max-width:350px; border-radius:10px;"><strong>Fille successfuly added, add another one or skip to go back!</strong></div>
					<?php endif; ?>
					<?php if($_GET['m'] == 'postok'): ?>
						<div class="alert alert-success" style="text-align:justify; max-width:350px; border-radius:10px;"><strong>Your post has been successfully added, now you can add associated pdf files<br> if not necessary, click skip </strong></div>
					<?php endif; ?>
				<?php endif; ?>
				<?= $content; ?>

		<footer>
			<div class="footer">
				<p>Copyright &copy; 2016 Heudou-Blog. All right reserved</p>
			</div>
		</footer>

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>