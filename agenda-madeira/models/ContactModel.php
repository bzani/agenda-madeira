<?php

/**
* Classe responsavel por persistir e realizar CRUD da agenda
**/
class ContactModel extends Database {
    private $id;
    private $name;
    private $email;
    private $phone;

    /**
     * Setters e Getters
     */

    public function getId() { return $this->id; }
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getName() { return $this->name; }
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getEmail() { return $this->email; }
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function getPhone() { return $this->phone; }
    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    /**
    *     Consulta lista de contatos
    */
    public function _list($name=null) {
        $query = (!is_null($name)) ?
            "SELECT * FROM agenda WHERE name LIKE '%$name%';" :
            "SELECT * FROM agenda;";

        $contacts = array();
        try {
            $data = $this->db->query($query);
            while($result = $data->fetchObject()) {
                $contact = new ContactModel();
                $contact->setId($result->id);
                $contact->setName($result->name);
                $contact->setEmail($result->email);
                $contact->setPhone($result->phone);
                array_push($contacts, $contact);
            }
        }
        catch(PDOException $e) {
            throw $e;
        }
        return $contacts;
    }

    /**
    *     Consulta dados de um contato
    */
    public function contactInfo($id) {
        $contacts = array();
        $query = "SELECT * FROM agenda WHERE id = ".$id.";";
        $data = $this->db->query($query);
        $result = $data->fetchObject();
        $this->setId($result->id);
        $this->setName($result->name);
        $this->setEmail($result->email);
        $this->setPhone($result->phone);
        return $this;
    }

    /**
    * Insere ou atualiza contato na tabela agenda
    */
    public function save() {
        if(is_null($this->id)) {
            $query = "INSERT INTO agenda
                        ( name, email, phone, registered )
                        VALUES
                        ( '$this->name', '$this->email', '$this->phone', current_timestamp);";
        } else {
            $query = "UPDATE    agenda
                         SET    name = '$this->name',
                                email = '$this->email',
                                phone = '$this->phone',
                                modified = current_timestamp
                         WHERE  id = $this->id";
        }

        try {
            $this->db->exec($query);
          } catch (Exception $e) {
              throw $e;
              return false;
          }
          return true;


        try {
            if($this->db->query($query) > 0) {
                if(is_null($this->id)) {
                    return $this->db->lastInsertId();
                } else {
                    return $this->id;
                }
            }
        }
        catch (PDOException $e) {
            throw $e;
        }
        return false;
    }

    /**
    * Deleta contato da tabela agenda
    */
    public function delete() {
        if(!is_null($this->id)) {
            $query = "DELETE FROM agenda
                        WHERE id = $this->id";
            if($this->db->exec($query) > 0) {
                return true;
            }
        }
        return false;
    }

}
