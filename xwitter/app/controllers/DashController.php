<?php

namespace App\Controllers;

use Core\Controller;
use Core\Database;

class DashController extends Controller
{
    public function tweet(){
        if($_SERVER['REQUEST_METHOD'] === "POST"){            
            $tweet = $_POST["tweet"];
            $db = Database::connect();
            $stm = $db->prepare("INSERT INTO tweets (content, id_user) VALUES (:tweet, :id_user)");
            $stm->bindParam(":tweet", $tweet);
            $stm->bindParam(":id_user", $_SESSION['user_id']);
            $stm->execute();
            $this->redirect("/dashboard");
        }
    }
}