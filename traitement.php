<?php
    session_start();

    $method = $_SERVER['REQUEST_METHOD'];
    $password = 1234;
    $username = 'amo';

    if($method == "POST"){
        if(isset($_POST['username']) and isset($_POST['password'])) {
            if($_POST['username'] == $username and $_POST['password'] == $password) {
                echo "Vous êtes conncter";

                 // creation de la session
                 $_SESSION['username'] = $username;
                 $_SESSION['password'] = md5($password);
                 $_SESSION['connected'] = true;
 
            } else{
                echo "You are not connected";
            }
        } else{
            echo "Remplissez tout les champs";
        }
    }

    ?>