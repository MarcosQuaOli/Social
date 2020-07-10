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

        $query = "SELECT u.iduser, u.nome, (
            select
                count(*)
            from
                users_follows as uf
            where 
                uf.iduser = :iduser and uf.iduser_follow = u.iduser
        ) as seguindo FROM tb_users as u WHERE nome like :nome and iduser != :iduser";

        $sql = new Connection();

        return $sql->select($query, array(
            ':iduser' => $_SESSION['user']['iduser'],
            ':nome' => '%'.$this->getNome().'%'
        ));

    }



}

?>