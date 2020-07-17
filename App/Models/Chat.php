<?php

namespace App\Models;

use App\Model;
use App\Connection;

class Chat extends Model 
{

    protected $idchat;
    protected $iduser_from;
    protected $iduser_to;
    protected $mensagem;
    protected $created_at;

    public function insert() 
    {

        $query = "INSERT INTO tb_chat(iduser_from, iduser_to, mensagem, created_at)VALUES(:iduser_from, :iduser_to, :mensagem, :created_at)";

        $sql = new Connection();

        $sql->query($query, array(
            ':iduser_from' => $this->getIduser_from(),
            ':iduser_to' => $this->getIduser_to(),
            ':mensagem' => $this->getMensagem(),
            ':created_at' => date('Y-m-d H:i:s')
        ));

    }
    
    public function getAll()
    {

        $query = "SELECT * FROM tb_chat WHERE iduser_from = :iduser_from and iduser_to = :iduser_to or iduser_from = :iduser_to and iduser_to = :iduser_from";

        $sql = new Connection();

        return $sql->select($query, array(
            ':iduser_from' => $this->getIduser_from(),
            ':iduser_to' => $this->getIduser_to()
        ));

    }
}

?>