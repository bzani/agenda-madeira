<?php

	/**
	*	Arquivo de configuracao criado para centralizar 
	*	configuracoes e informacoes textuais
	*/


	/** 
	*	Labels 
	*/
	define("LANG", "pt");
	define("LBL_TB_CL_ID", "Código");
	define("LBL_TB_CL_NAME", "Nome");
	define("LBL_TB_CL_NAME2", "Nome / Razão Social");
	define("LBL_TB_CL_EMAIL", "E-mail");
	define("LBL_TB_CL_PHONE", "Telefone");
	define("LBL_TB_CL_ACTIONS", "Ações");
	define("LBL_TB_BT_CANCEL", "Cancelar");
	define("LBL_TB_BT_SAVE", "Salvar");
	define("LBL_TB_BT_EDIT", "Editar");
	define("LBL_TB_BT_DELETE", "Apagar");
	define("LBL_BT_NEW", "Novo Contato");
	define("LBL_BT_REFRESH", "Atualizar");
	define("LBL_TT_SITE", "Agenda Telefônica | Madeira");
	define("LBL_HE_TITLE", "AGENDA");
	define("LBL_HE_ME_CO", "Contatos");
	define("LBL_HE_ME_DA", "Dashboard");
	define("LBL_HE_DD1", "Gerenciar Contatos");
	define("LBL_HE_DD2", "Novo Contato");
	define("LBL_TT_LIST", "Contatos");
	define("LBL_TT_MAINT", "Manutenção");
	define("LBL_TT_DASHB", "Dashboard");
	define("LBL_TT_ABOUT", "Sobre");

	function label($str) {
		echo constant($str);
	}

	/** 
	*	Database
	*/
	define('DB_NAME', 'agenda_madeira');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_HOST', 'localhost');

	/** 
	*	Sistema
	*/
	if (!defined('ABSPATH'))
		define('ABSPATH', dirname(__FILE__) . '/');
		
	if (!defined('BASEURL'))
		define('BASEURL', '/agenda-madeira/');
		
	/** 
	*	Estilo
	*/
	define('ST_TM_HEADER', 'views/templateHeader.phtml');
	define('ST_TM_FOOTER', 'views/templateFooter.phtml');
	define('ST_PT_VENDOR', BASEURL.'vendor/bootstrap/');

	/** 
	*	Controle
	*/
	define('TRACE', false);

?>