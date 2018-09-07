<!DOCTYPE html>
<html>
	<head>
		<title><?= App::getInstance()->title; ?></title>

		<meta charset="utf-8" /> <!-- Encodage des carractères de la page -->
		<meta name="robots" content="noarchive">
		<meta name="description" content="<?= App::getInstance()->desc_page; ?>">

		<link rel="icon" href="favicon.ico" /> <!-- Icone de la page -->
		
		<link href="css/style.css" type="text/css" rel="stylesheet" >
		
	</head>

	<body>
		<div id="page">
			<div class="left">
				<div class="logo"><a href="index.php"><img src="<?= ROOT.'/Data/ico/logo.png' ?>" alt="LOGO"></a></div>
				<nav class="menu">
					<ul>
						<li><a href="index.php"><img src="<?= ROOT.'/Data/ico/main/accueil.png' ?>" alt="CASA"></a></li>
						<li><a href="index.php?p=<?=$_SESSION["lang"].'.Page.Home.About_me' ?>"><img src="<?= ROOT.'/Data/ico/main/about_me.png' ?>" alt="SOBRE MI"></a></li>
						<li><a href="index.php?p=<?=$_SESSION["lang"].'.Page.Home.Skills' ?>"><img src="<?= ROOT.'/Data/ico/main/skills.png' ?>" alt="HABILIDADES"></a></li>
						<li><a href="index.php?p=<?=$_SESSION["lang"].'.Page.Home.Worked' ?>"><img src="<?= ROOT.'/Data/ico/main/worked.png' ?>" alt="TRABAJÓ"></a></li>
						<li><a href="index.php?p=<?=$_SESSION["lang"].'.Page.Home.Contact' ?>"><img src="<?= ROOT.'/Data/ico/main/contact.png' ?>" alt="CONTACTO"></a></li>
					</ul>
				</nav>
				<nav class="social">
					<ul>
						<li><a href="https://www.facebook.com/biyapaul.kamga" target="blank"><img src="<?= ROOT.'/Data/ico/social/facebook.png' ?>" alt="FACEBOOK"></a></li>
						<li><a href="https://www.linkedin.com/in/biyapaul-237/" target="blank"><img src="<?= ROOT.'/Data/ico/social/linkedin.png' ?>" alt="LINKEDIN"></a></li>
						<li><a href="https://twitter.com/bpd_237" target="blank"><img src="<?= ROOT.'/Data/ico/social/twitter.png' ?>" alt="TWITTER"></a></li>
						<li><a href="https://github.com/bpd237" target="blank"><img src="<?= ROOT.'/Data/ico/social/github.png' ?>" alt="GITHUB"></a></li>
						<li><a href="" target="blank"><img src="<?= ROOT.'/Data/ico/social/rss.png' ?>" alt="RSS"></a></li>
					</ul>
				</nav>
			</div>
			<div class="right">
				<div class="anim_bg">
					<div id="one" class="tourner"><img src="<?= ROOT.'/Data/ico/bg.png' ?>" alt=""></div>
					<div id="two" class="tourner"><img src="<?= ROOT.'/Data/ico/bg.png' ?>" alt=""></div>
					<div id="three" class="tourner"><img src="<?= ROOT.'/Data/ico/bg.png' ?>" alt=""></div>
				</div>
				<?= $content; ?>
				<footer>
					<p>copyright &copy; BPD_237 2018 Todos los derechos reservados ! por &lt;BPD_237/&gt;</p>
					<div>
						<a href="index.php?p=fr.Page.Home.Index"><img class="lang" src="<?= ROOT.'/Data/ico/lang/fr.png' ?>" alt="fr" title="Français"></a>
						<a href="index.php?p=en.Page.Home.Index"><img class="lang" src="<?= ROOT.'/Data/ico/lang/en.png' ?>" alt="en" title="English"></a>
						<a href="#"><img class="active_lang lang" src="<?= ROOT.'/Data/ico/lang/esp.png' ?>" alt="esp" title="español"></a>
					</div>
				</footer>
			</div>
		</div>
		<script type="text/javascript" src="js/dancing_word.js"></script>
		<script type="text/javascript" src="js/image_hover.js"></script>
		<script type="text/javascript" src="js/active_menu.js"></script>
	</body>
</html>