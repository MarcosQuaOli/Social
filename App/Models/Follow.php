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

        $query = "INSERT INTO users_follows(iduser, iduser_follow)VALUES(:iduser, :iduser_follow)";

        $sql = new Connection();

        $sql->query($query, array(
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
    
    public function getAll()
    {

        $query = "SELECT u.iduser, u.nome FROM users_follows as uf LEFT JOIN tb_users as u on uf.iduser_follow = u.iduser WHERE uf.iduser = :iduser";

        $sql = new Connection();

        return $sql->select($query, array(
            ':iduser' => $_SESSION['user']['iduser']
        ));

    }

}

?>