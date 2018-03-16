<?php

	/**
	* 	Identifica qual controller demandado pela aplicação
	*/
	spl_autoload_register();

	/**
	* 	Identifica qual controller demandado pela aplicação
	*/
	class ApplicationController {
		protected $controller;
		protected $action;

		private function setRoute() {
			
			/**
			*	Controller e action default: index
			*/
			$this->controller = 
				isset($_REQUEST['controle']) ?
				$_REQUEST['controle'] :
				'index';

			$this->action = 
				isset($_REQUEST['acao']) ?
				$_REQUEST['acao'] : 
				'index';

		}

		public function dispatch() {
			$this->setRoute();

			/**
			*	Consiste acao especificada
			*/
			$controller_file = 'controllers/' .
				ucfirst(($this->controller)) .
				'Controller.php';
			if (file_exists($controller_file)) {
				require_once $controller_file;
			} else {
				throw new Exception('Arquivo '.$controller_file.' nao encontrado.');
			}

			$class = $this->controller.'Controller';
			if (class_exists($class)) {
				$class_ok = new $class;
			} else {
				throw new Exception('Classe '.$class.' nao encontrada.');
			}

			$method = $this->action.'Action';
			if (method_exists($class_ok, $method)) {
				$class_ok->$method();
			} else {
				throw new Exception('Metodo '.$method.' nao encontrado na classe '.$class.'.');
			}
		}

		/**
		* Redireciona chamada http para outra pagina
		*/
		public function redirect($uri) {
			header("Location: $uri");
		}
	}

?>