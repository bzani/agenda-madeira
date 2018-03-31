<?php

/**
*     Classe que trata ação padrão a ser executada
*/
class IndexController {

    /**
    *     Redireciona para lista de contatos da agenda
    */
    public function indexAction()
    {
        header('Location: ?controle=Contact&acao=contactList');
    }
}
