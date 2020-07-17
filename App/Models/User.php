<?php

namespace App\Models;

use App\Model;
use App\Connection;

class User extends Model 
{

    protected $iduser;
    protected $nome;
    protected $email;
    protected $password;
    protected $birthday;

    public function insert() 
    {

        $query = "INSERT INTO tb_users(nome, email, password, birthday)VALUES(:nome, :email, :password, :birthday)";

        $sql = new Connection();

        $sql->query($query, array(
            ':nome' => $this->getNome(),
            ':email' => $this->getEmail(),
            ':password' => USER::getPasswordHash($this->getPassword()),
            ':birthday' => $this->getBirthday()
        ));

    }

    public static function getPasswordHash($password)
	{

		return password_hash($password, PASSWORD_DEFAULT, [
			'cost'=>12
		]);

    }
    
    public function getUser()
    {

        $query = "SELECT * FROM tb_users WHERE email = :email";

        $sql = new Connection();

        return $sql->select($query, array(
            ':email' => $this->getEmail()
        ));

    }
    
    public function searchUser()
    {

        //$query = "SELECT * FROM tb_users WHERE nome like :nome and iduser != :iduser";
        $query = "SELECT u.iduser, u.nome, uf.status FROM tb_users as u LEFT JOIN users_follows as uf on uf.iduser = u.iduser WHERE u.nome like :nome and u.iduser != :iduser";

        $sql = new Connection();

        return $sql->select($query, array(
            ':iduser' => $_SESSION['user']['iduser'],
            ':nome' => '%'.$this->getNome().'%'
        ));

    }



}

?>