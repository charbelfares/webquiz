<?php
    session_start();

    require_once('database.php');

    function loginAB($username, $password){
        $connection= connect();

        if ($stmt= $connection->prepare("SELECT idabonne FROM abonne WHERE username=? AND password=?")){
            $stmt->bind_param('ss', $username, $password);
            $stmt->execute();

            $stmt->bind_result($userId);

            if(!$stmt->fetch()){
                return false;
            }
            $_SESSION['username'] = $userId;
            $stmt->close();
            $connection->close();

            return true;
        } else{
            return false;
        }
    }
        function loginAD($username, $password){
            $connection= connect();

            if ($stmt= $connection->prepare("SELECT idadmin FROM admin WHERE username=? AND password=?")){
                $stmt->bind_param('ss', $username, $password);
                $stmt->execute();
    
                $stmt->bind_result($userId);
    
                if(!$stmt->fetch()){
                    return false;
                }
                $_SESSION['username'] = $userId;
                $stmt->close();
                $connection->close();
    
                return true;
            } else{
                return false;
            }
        }
    function logout(){
        session_destroy();
    }


    function isLoggedIn()
{
    return !empty($_SESSION['username']);
}