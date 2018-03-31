<?php

/**
*   Classe responsavel pelo Dashboard
*/
require_once 'models/ContactModel.php';
require_once 'views/RenderView.php';

class DashboardController {

    public function renderAction() {
        $contact = new ContactModel();
        $contacts = $contact->_list();

        /**
        *   Define e carrega tela de lista de contatos
        */
        $view = new RenderView('views/dashboard.phtml');
        $view->setParams(array('contacts' => $contacts));
        $view->showContents();
    }
}
