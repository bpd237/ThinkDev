<!DOCTYPE html>
<html>
	<head>
		<title>ThinkDev - <?= $title; ?></title>

		<meta charset="utf-8" /> <!-- Encodage des carractères de la page -->
		<meta name="robots" content="noarchive">
		<meta name="description" content="<?= App::getInstance()->desc_page; ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Bpd_237 thinkDev" />
		<meta name="keywords" content="" />

		<link rel="shurtcon icon" href="thinkdev.ico" /> <!-- Icone de la page -->

		<link href="/Workspace_/MMBL/Public/css/grille_responsive.css" type="text/css" rel="stylesheet" >
		<link href="/Workspace_/MMBL/Public/css/style.css" type="text/css" rel="stylesheet" >
	</head>

	<body>

		<header class="header"><!-- [A] -->
			<section class="section_diaporama"> <!-- [I] -->
				<div class="diapo_container diapo_container_active apparait"><!--
					--><section class="diapo_img diapo_one diapo_active"><!--
					--></section><!--
					--><section class="diapo_contenu diapo_contenu_active col_de_3 vers_la_gauche"><!--
						--><div><!--
							--><h3>CONCEPTION WEB & MOBILE</h3><hr> <!--
							--><p><!--
								-->&lt;/ThinkDev&gt; vous proposer de concevoir, réaliser et héberger vos sites web enrichies avec des foncionnalités interactive modernes et professionnelles ainsi que vos applications mobile hybride ou natives via les technologies appropriés et tout ceci à moindre coût; <br><!--
								--><span class="more_link">Voir davantages ...</span><!--
							--></p><!--
						--></div><!--
					--></section><!--
				--></div>
				<div class="diapo_container"><!--
					--><section class="diapo_img diapo_two"><!--
					--></section><!--
					--><section class="diapo_contenu col_de_3"><!--
						--><div><!--
							--><h3>CONCEPTION DE VISUELS</h3><hr> <!--
							--><p><!--
								-->Le Dessin est bien plus qu’une passion pour nous, c’est un mode de vie, c’est à partir de là que tout commence; c’est par là que nous représentons notre vision!<br><!--
								--><span class="more_link">Voir davantages ...</span><!--
							--></p><!--
						--></div><!--
					--></section><!--
				--></div>
				<div class="diapo_container"><!--
					--><section class="diapo_img diapo_three"><!--
					--></section><!--
					--><section class="diapo_contenu col_de_3"><!--
						--><div><!--
							--><h3>CONCPETION LOGICIELS</h3><hr> <!--
							--><p><!--
								-->Notre équipe dispose également de compétences nécessaire pour satisfaire vos attentes notamment dans la création de logiciels.<br><!--
								--><span class="more_link">Voir davantages ...</span><!--
							--></p><!--
						--></div><!--
					--></section><!--
				--></div>
				<div class="diapo_container"><!--
					--><section class="diapo_img diapo_four"><!--
					--></section><!--
					--><section class="diapo_contenu col_de_3"><!--
						--><div><!--
							--><h3>FORMATIONS DIVERSES</h3><hr> <!--
							--><p><!--
								-->Nous ressentons toujours une grande joie, quand nous accomplissons une mission. Mais elle n’est rien comparée à celle qu’apporte la naissance d’un nouveau  Génie en Informatique encadré par nos Soins.<br><!--
								--><span class="more_link">Voir davantages ...</span><!--
							--></p><!--
						--></div><!--
					--></section><!--
				--></div>
				<div class="diapo_control_timer"></div>
				<div class="diapo_control_direction">
					<span class="mb">&lt;</span>
					<span class="mb">&gt;</span>
				</div>
				<div class="diapo_control_point">
					<span class="mb diapo_control_point_active" item_level = "0"></span>
					<span class="mb" item_level = "1"></span>
					<span class="mb" item_level = "2"></span>
					<span class="mb" item_level = "3"></span>
				</div>
			</section>
			<section class="section_menu"><!-- [II] -->
				<section class="logo_bloc"></section>
				<section class="menu_bloc">
					<nav class="menu">
						<ul class="menu_level_one">
							<li>
								<a href="Services">
								<i class="menu_one_icon fa">&#xf120;</i>
									<div class="menu_one_content">
										<h2 class="menu_one_main">Nos Services</h2>
										<h5 class="menu_one_sub">Faites nous confiance ...</h5>
									</div>
								</a>
							</li>
							<li>
								<a href="Formations">
								<i class="menu_one_icon fa">&#xf19d;</i>
							        <div class="menu_one_content">
							         <h2 class="menu_one_main">Nos Formations</h2>
							         <h5 class="menu_one_sub">Devennez Professionnels ...</h5>
							        </div>
								</a>
							</li>
							<li>
								<a href="Forum">
									<i class="menu_one_icon fa">&#xf0c0;</i>
							        <div class="menu_one_content">
							         <h2 class="menu_one_main">Le Forum</h2>
							         <h5 class="menu_one_sub">Et vos Questions ...</h5>
							        </div>
								</a>
							</li>
							<li>
								<a href="Premium">
									<i class="menu_one_icon fa">&#xf07a;</i>
							        <div class="menu_one_content">
							         <h2 class="menu_one_main">Premium</h2>
							         <h5 class="menu_one_sub">Plus d'avantages ...</h5>
							        </div>
								</a>
							</li>
							<li>
								<a href="Divers">
									<i class="menu_one_icon fa">&#xf0fe;</i>
							        <div class="menu_one_content">
							         <h2 class="menu_one_main">Divers</h2>
							         <h5 class="menu_one_sub">Encore des Surprises ...</h5>
							        </div>
								</a>
							</li>
						</ul>
					</nav>
				</section>
				<section class="search_bloc">
					<form class="search" method="post" action="">
						<input type="search" name="find_something" placeholder="Search ...">
					</form>
				</section>
				<section class="section_sign">
					<span class="signin">
						<a href="signin">
							<img src="/Workspace_/MMBL/Data/ico/ico_signin.pjng" Title="Se Connecter"><br>
							<span>Se Connecter</span>
						</a>
					</span>
				</section>
				<section class="section_sign">
					<span class="signup">
						<a href="signup">
							<img src="/Workspace_/MMBL/Data/ico/ico_signup.pjng" Title="S'Enrégistrer"><br>
							<span>S'Enrégistrer</span>
						</a>
					</span>
				</section>
				<div class="smallspace"></div>
			</section>
		</header>

		<div id="position">
			<span><a href="index">:: &lt;/ThinkDev&gt;</a> <a href="#">|| :: <?= $title; ?></a></span>
			<span id="close">X</span>
		</div>
		<div id="page">
			<?= $content; ?>
		</div>

		<footer class="footer animate">
			<section class="before_footer"></section>
			<div class="more">
				<h3>ThinkDev</h3><hr>
				<p>&lt;/ThinkDev&gt; est un bureau d’études et de conseils; spécialisé en Informatique, principalement basée dans les villes de Yaoundé et Douala  ...</p>
				<div class="more_content">
					<div class="more_left">
						<ul class="more_menu">
							<a href="a_propos"><li><i class="fa">&#xf05a;</i> A propos</li></a>
							<a href="certificat"><li><i class="fa">&#xf19c;</i> Certificats</li></a>
							<a href="conditions"><li><i class="fa">&#xf122;</i> Conditions</li></a>
							<a href="confidentialite"><li><i class="fa">&#xf2c2;</i> Confidentialité</li></a>
							<a href="mention_legale"><li><i class="fa">&#xf11c;</i> Mentions Légales</li></a>
							<a href="propriete_intellectuelle"><li><i class="fa">&#xf2db;</i> Propriété Intellectuelle</li></a>
							<a href="nous_soutenir"><li><i class="fa">&#xf0d6;</i> Nous Soutenir</li></a>
						</ul>
					</div>
					<div class="more_right">
						<ul class="more_menu">
							<a href="http://www.thinkDev.Portfolio.com"><li><i class="fa">&#xf1a2;</i> Portfolio</li></a>
							<a href="http://www.thinkDev.Blog.com"><li><i class="fa">&#xf1d8;</i> Blog</li></a>
							<a href="partenaires"><li><i class="fa">&#xf0ac;</i> Partenaires</li></a>
							<a href="developpeurs"><li><i class="fa">&#xf1c9;</i> Développeurs</li></a>
							<a href="formateurs"><li><i class="fa">&#xf008;</i> Formateurs</li></a>
							<a href="designers"><li><i class="fa">&#xf108;</i> Designers</li></a>
						</ul>
					</div>
				</div>
				<p>... Notre but est de vous offrir une gamme de Prestations Informatiques : La plus large possible</p>
			</div>
			<div class="contact">
				<h3>Contact</h3><hr>
				<p class="social_contact">
					<a class="fa" href="https://www.facebook.com/ThinkDev">&#xf082;</a>
					<a class="fa" href="https://www.twitter.com/ThinkDev">&#xf081;</a>
					<a class="fa" href="https://www.linkedin.com/ThinkDev">&#xf08c;</a>
					<a class="fa" href="https://www.github.com/ThinkDev">&#xf092;</a>
					<a class="fa" href="https://www.google.com/ThinkDev">&#xf0d4;</a>
					<a class="fa" href="https://www.youtube.com/ThinkDev">&#xf166;</a>
					<a class="fa" href="https://www.skype.com/ThinkDev">&#xf17e;</a>
					<a class="fa" href="https://www.instagram.com/ThinkDev">&#xf16d;</a>
					<a class="fa" href="https://www.dribbble.com/ThinkDev">&#xf17d;</a>
				</p>
				<form class="contact_form" method="post" action="sendMail">
					<div class="form_intro">
						<input class="name" type="text" placeholder="Nom & Prénom">
						<input class="mail" type="mail" name="mail" placeholder="Mail" required>
					</div>
					<div class="form_subject">
						<input class="subject" type="text" name="subject" placeholder="Sujet">
					</div>
					<div class="form_content">
						<textarea required>Votre Message</textarea>
					</div>
					<input type="submit" name="submit" value="Envoyer">
				</form>
			</div>
			<div class="map">
				<h3>Position</h3><hr>
			</div>
			<section class="after_footer">
				<p>Copyright &copy; 2018 &lt;/ThinkDev&gt; tous droits reservés</p>
			</section>
		</footer>
		<script type="text/javascript" src="/Workspace_/MMBL/Public/js/navigate_diapo.js"></script>
		<!-- <script type="text/javascript" src="/Workspace_/MMBL/Public/js/active_menu.js"></script> -->
		<!-- <script type="text/javascript" src="/Workspace_/MMBL/Public/js/fixed_menu.js"></script> -->
		<!-- <script type="text/javascript" src="/Workspace_/MMBL/Public/js/canvas_footer.js"></script> -->
		<script type="text/javascript" src="/Workspace_/MMBL/Public/js/jquery.js"></script>
	</body>
</html>