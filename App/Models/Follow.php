<?php

namespace App\Models;

use App\Model;
use App\Connection;

class Follow extends Model 
{

    protected $id;
    protected $iduser;
    protected $iduser_follow;

    public function insert() 
    {

        $query = "INSERT INTO users_follows(iduser, iduser_follow, status)VALUES(:iduser, :iduser_follow, :status)";

        $sql = new Connection();

        $sql->query($query, array(
            ':iduser' => $this->getIduser(),
            ':iduser_follow' => $this->getIduser_follow(),
            ':status' => 'pendente'
        ));

    }

    public function confirm() 
    {

        $query = "UPDATE `users_follows` SET status = 'amigos' WHERE iduser_follow = " . $this->getIduser() . " and iduser = " . $this->getIduser_follow() . ";";
        $query .= " INSERT into users_follows(iduser, iduser_follow, status)VALUES(:iduser, :iduser_follow, 'amigos')";

        $sql = new Connection();

        $result = $sql->query($query, array(
            ':iduser' => $this->getIduser(),
            ':iduser_follow' => $this->getIduser_follow()
        ));

    }

    public function delete() 
    {

        $query = "DELETE FROM users_follows WHERE iduser = :iduser AND iduser_follow = :iduser_follow";

        $sql = new Connection();

        $sql->query($query, array(
            ':iduser' => $this->getIduser(),
            ':iduser_follow' => $this->getIduser_follow()
        ));

    }

    public function getPendente() {
        
        $query = "SELECT u.iduser, u.nome FROM users_follows as uf LEFT JOIN tb_users as u on uf.iduser = u.iduser WHERE uf.iduser_follow = :iduser and status = :status";

        $sql = new Connection();

        return $sql->select($query, array(
            ':iduser' => $_SESSION['user']['iduser'],
            ':status' => 'pendente'
        ));
        
    }
    
    public function getAll()
    {

        $query = "SELECT u.iduser, u.nome FROM users_follows as uf LEFT JOIN tb_users as u on uf.iduser_follow = u.iduser WHERE uf.iduser = :iduser and uf.status = 'amigos'";
        $sql = new Connection();

        return $sql->select($query, array(
            ':iduser' => $_SESSION['user']['iduser']
        ));

    }

}

?>