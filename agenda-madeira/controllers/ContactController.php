<?php

    /**
    *   Classe responsavel pelo gerenciamento da camada Model
    */
    require_once 'models/ContactModel.php';
    require_once 'models/ValidationModel.php';
    require_once 'views/RenderView.php';
      
    class ContactController {

        public function contactListAction() {
            $contact = new ContactModel();
            $contacts = $contact->_list();
              
            /**
            *   Define e carrega tela de lista de contatos
            */
            $view = new RenderView('views/contactList.phtml');
            $view->setParams(array('contacts' => $contacts));
            $view->showContents();
        }
          
          
        /**
        * Gerencia manutencao dos contatos da agenda
        */
        public function contactManagAction() {
            $contact = new ContactModel();
              
            /**
            *   Consiste id passado
            */
            if(isset($_REQUEST['id'])) {
                if(ValidationModel::isNumeric($_REQUEST['id'])) {
                    $contact->contactInfo($_REQUEST['id']);
                }
            }
                  
            /**
            *   Consiste e seta parametros
            */
            if(count($_POST) > 0)
            {
                $contact->setName(ValidationModel::cleanString($_POST['name']));
                $contact->setEmail(ValidationModel::cleanString($_POST['email']));
                $contact->setPhone(ValidationModel::cleanString($_POST['phone']));
                  
                if($contact->save() > 0) {
                    header("Location: ?controle=Contact&acao=contactList");
                    //ApplicationController::redirect('?controle=Contact&acao=contactList');
                }
            }
                  
            $view = new RenderView('views/contactManag.phtml');
            $view->setParams(array('contact' => $contact));
            $view->showContents();
        }
          
        /**
        * Gerencia exclusao dos contatos da agenda
        */
        public function apagarContatoAction() {
            if( ValidationModel::isNumeric($_GET['id']) ) {
                //apagando o contato
                $contact = new ContactModel();
                $contact->contactInfo($_GET['id']);
                $contact->delete();
                header("Location: ?controle=Contact&acao=contactList");
                //ApplicationController::redirect('?controle=Contact&acao=contactList');
            }   
        }
    }
?>