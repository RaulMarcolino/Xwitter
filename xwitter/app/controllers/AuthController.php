<?php

namespace App\Controllers;

use Core\Controller;
use Core\Database;

class AuthController extends Controller
{
   public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Iniciar a sessão
            session_start();

            // Verificar se os campos não estão vazios
            if (empty($username) || empty($password)) {
                $_SESSION['error_message'] = "Por favor, preencha todos os campos.";
                header('Location: /login');
                exit;
            }

            // Verificar se o usuário existe no banco de dados
            $db = Database::connect();
            $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                // Senha está correta, iniciar a sessão
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['name'] = $user['name']; // Salvando o nome completo do usuário na sessão

                echo "Login realizado com sucesso!";
                header('Location: /dashboard');
                exit;
            } else {
                $_SESSION['error_message'] = "Usuário ou senha incorretos.";
                header('Location: /login');
                exit;
            }
        } else {
            // Exibir o formulário de login
            $this->view('auth/login');
        }
    }

    // Método de logout
    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /login');
        exit;
    }

   public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obter os dados do formulário
            $name = $_POST['name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Verificar se os campos não estão vazios
            if (empty($name) ||  empty($email) || empty($username) || empty($password)) {
                echo "Por favor, preencha todos os campos.";
                return;
            }

            // Verificar se o username já existe
            $db = Database::connect();
            $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                echo "Nome de usuário já está em uso.";
                return;
            }

            // Criptografar a senha
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Inserir o novo usuário no banco de dados
            $stmt = $db->prepare("INSERT INTO users (name, username, password, email) VALUES (:name, :username, :password, :email)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':email', $email);

            if ($stmt->execute()) {
                echo "Cadastro realizado com sucesso!";
                // Redirecionar para a página de login
                header('Location: /login');
                exit;
            } else {
                echo "Ocorreu um erro ao cadastrar o usuário.";
            }
        } else {
            // Exibir o formulário de cadastro
            $this->view('auth/register');
        }
    }

  public function dash()
 {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }

        $this->view('dash/index', ['user' => $_SESSION['name']]);
    }

}