<?php
    require_once('vendor/autoload.php');
    require_once('config.php');
    require_once('class/User.class.php');

    echo $twig->render('index', ['name' => 'Paweł']);

    //    $user = new User('jkowalski', 'tajneHasło');


    /*

        if($user->register()) {
            echo "Zarejestrowano poprawnie";
        } else {
            echo "Błąd rejestracji użytkownika";
        }

    */


    if($user->login()) {
        echo "Zalogowano poprawnie";
    } else {
        echo "Błędny login lub hasło";
    }

?>