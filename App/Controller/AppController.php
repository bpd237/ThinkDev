<?php 

	namespace MMBL_Bpd_237_work\Controller;

	use Core\Controller\Controller;
	use Core\Auth\DBAuth;
	use \MMBL_Bpd_237_work;

	class AppController extends Controller{

		protected $template = 'default';

		public function __construct(){
			global $messages;
			$this->viewPath = ROOT. '/App/Views/';
		}

		public function loadModel($model_name){
			$this->model_name = \App::getInstance()->getTable($model_name);
			return $this->model_name;
		}

		protected function is_logged(){

			$app = \App::getInstance();
			$auth = new DBAuth($app->getDb());

			return $auth->logged();
		}
	}
 ?>