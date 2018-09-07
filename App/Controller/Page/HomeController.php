<?php 

	namespace MMBL_Bpd_237_work\Controller\Page;

	class HomeController extends \MMBL_Bpd_237_work\Controller\AppController{


		private function setTitle() {

			$p = stripcslashes(htmlentities($_GET['p']));
			$p = explode('.', $p);
			return ucfirst($p[3]);
		}

		public function index() {

			$title = "Accueil";
			$this->render($_SESSION['thinkDev.lang'].'.home.index', compact('title'));
		}

		public function services() {

			$title = $this->setTitle();
			$this->render($_SESSION['thinkDev.lang'].'.home.services', compact('title'));
		}

		public function formations() {

			$title = $this->setTitle();
			$this->render($_SESSION['thinkDev.lang'].'.home.formations', compact('title'));
		}

		public function premium() {

			$title = $this->setTitle();
			$this->render($_SESSION['thinkDev.lang'].'.home.premium', compact('title'));
		}

		public function forum() {

			$title = $this->setTitle();
			$this->render($_SESSION['thinkDev.lang'].'.home.forum', compact('title'));
		}

		public function divers() {

			$title = $this->setTitle();
			$this->render($_SESSION['thinkDev.lang'].'.home.divers', compact('title'));
		}

		public function a_propos() {

			$title = $this->setTitle();
			$this->render($_SESSION['thinkDev.lang'].'.home.a_propos', compact('title'));
		}

		public function certificats() {

			$title = $this->setTitle();
			$this->render($_SESSION['thinkDev.lang'].'.home.certificats', compact('title'));
		}

		public function conditions() {

			$title = $this->setTitle();
			$this->render($_SESSION['thinkDev.lang'].'.home.conditions', compact('title'));
		}

		public function confidentialite() {

			$title = $this->setTitle();
			$this->render($_SESSION['thinkDev.lang'].'.home.confidentialite', compact('title'));
		}

		public function mentions_legales() {

			$title = $this->setTitle();
			$this->render($_SESSION['thinkDev.lang'].'.home.mentions_legales', compact('title'));
		}

		public function propriete_intellectuelle() {

			$title = $this->setTitle();
			$this->render($_SESSION['thinkDev.lang'].'.home.propriete_intellectuelle', compact('title'));
		}

		public function partenaires() {

			$title = $this->setTitle();
			$this->render($_SESSION['thinkDev.lang'].'.home.partenaires', compact('title'));
		}

		public function developpeurs() {

			$title = $this->setTitle();
			$this->render($_SESSION['thinkDev.lang'].'.home.developpeurs', compact('title'));
		}

		public function formateurs() {

			$title = $this->setTitle();
			$this->render($_SESSION['thinkDev.lang'].'.home.formateurs', compact('title'));
		}

		public function designers() {

			$title = $this->setTitle();
			$this->render($_SESSION['thinkDev.lang'].'.home.designers', compact('title'));
		}

		public function nous_soutenir() {

			$title = $this->setTitle();
			$this->render($_SESSION['thinkDev.lang'].'.home.nous_soutenir', compact('title'));
		}
	}
 ?>