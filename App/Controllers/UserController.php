<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\User;
use App\Models\Follow;
use App\Models\Chat;

class UserController 
{

    protected $container;

    // constructor receives container instance
    public function __construct(ContainerInterface $container) 
    {
        $this->container = $container;
    }

    public function index(Request $request, Response $response) 
    {

        $renderer = render();
        
        return $renderer->render($response, "/user/login.phtml");

    }
    
    public function show(Request $request, Response $response) 
    {

        $renderer = render();
        
        return $renderer->render($response, "/user/profile.phtml");

    }
    
    public function contato(Request $request, Response $response, $args) 
    {
        
        $user_follow = new Follow();

        $results = $user_follow->getAll();

        $renderer = render();

        if(isset($args['id'])) {

            $chat = new Chat();

            $chat->iduser_from = $_SESSION['user']['iduser'];
            $chat->iduser_to = $args['id'];

            $mensagens = $chat->getAll();

            return $renderer->render($response, "/user/contato.phtml", [
                "friends" => $results,
                "user" => $args['id'],
                "mensagens" => $mensagens
            ]);
        }

        return $renderer->render($response, "/user/contato.phtml", [
            "friends" => $results
        ]);

    }
    
    public function follow(Request $request, Response $response, $args) 
    {

        $user_follow = new Follow();

        $user_follow->iduser_follow = $args['id'];
        $user_follow->iduser = $_SESSION['user']['iduser'];

        $user_follow->insert();

        return $response->withRedirect('/user/search');

    }
    
    public function unfollow(Request $request, Response $response, $args) 
    {

        $user_follow = new Follow();

        $user_follow->iduser_follow = $args['id'];
        $user_follow->iduser = $_SESSION['user']['iduser'];

        $user_follow->delete();

        return $response->withRedirect('/user/search');

    }
    
    public function search(Request $request, Response $response) 
    {

        $user = new User(); 

        $user->nome = $_POST['usuario'];
        
        $result = $user->searchUser();
        
        $renderer = render();
        
        return $renderer->render($response, "/user/search.phtml", [
            "results" => $result
        ]);

    }

    public function store(Request $request, Response $response)
    {   
        
        $data = $request->getParsedBody();

        $user = new User();  

        $user->setAll($data);

        $user->nome = $_POST['nome'] . ' ' . $_POST['sobrenome'];

        if(count($user->getUser()) > 0) {

            return $response->withRedirect('/user/create');

        }   

        $user->insert();

        return $response->withRedirect('/?sucesso=1'); 
      
    }

    public function login(Request $request, Response $response) 
    {      
        
        $user = new User();

        $user->setAll($_POST);

        $results = $user->getUser();

		if (count($results) === 0) {

            throw new \Exception("Usuário inexistente ou senha inválida.");
            
        }

        $data = $results[0];

		if (password_verify($user->getPassword(), $data->password) == 1) {

            $user->setAll((array) $data);

            $_SESSION['user'] = array(
                'iduser' => $user->getIduser(),
                'nome' => $user->getNome(),
                'email' => $user->getEmail(),
                'birthday' => $user->getBirthday()
            );

			return $response->withRedirect('/feed');

		} else {

            throw new \Exception("Usuário inexistente ou senha inválida.");
            
        }
        
    }
    
    public function logout(Request $request, Response $response) 
    {  

        session_unset();
        session_destroy();
        
        return $response->withRedirect('/');

    }
    
}