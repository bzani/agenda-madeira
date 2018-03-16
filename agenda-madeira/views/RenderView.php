<?php

	/**
	*	Classe utilizada para renderizar as telas da aplicacao
	*/
	class RenderView {
		private $html_content;
		private $view_file;
		private $view_params;

		
		/**
		*	Metodo construtor da classe
		*/
		function __construct($view_file=null, $view_params=null) {
			/**
			*	Verifica tela a ser acessada
			*/
			if ($view_file != null) {
				if (file_exists($view_file)) {
					$this->view_file = $view_file;
				} else {
					throw new Exception("Arquivo $view_file nao existe.");
				}
			}

			/**
			*	Seta parametros da tela
			*/
			$this->view_params = $view_params;	
		}

		/**
		* 	Retorna parametros de tela (View)
		*/
		public function getParams() {
			return $this->view_params;
		}

		/**
		*	Seta parametros de tela
		*/
		public function setParams(Array $view_params) {
			$this->view_params = $view_params;	
		}
	
		/**
		* Monta conteudo do arquivo de View
		*/
		public function getContents() {
			/**
			* 1. armazena dados de saida em buffer
			* 2. recupera conteudo e monta a tela
			*/
			ob_start();
			if(isset($this->view_file))
				require_once $this->view_file;
			$this->html_content = ob_get_contents();
			ob_end_clean();
			return $this->html_content;	
		}
		
		/**
		* Printa arquivo de visualizacao 
		*/
		public function showContents() {
			echo $this->getContents();
			exit;
		}	

	}

?>