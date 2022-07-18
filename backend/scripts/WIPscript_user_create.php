<?php
    function redirect($url) { 
        // active la mise en mémoire tampon d'entrée
        ob_start(); 
        header('Location: '.$url);
        // désactive la mise en mémoire tampon de sortie
        ob_end_flush();
        //arrête le reste du code de la page si la redirection est ignorée. La façon de le faire est d’ajouter die() ou exit() après votre redirection 
        die(); 
    }
    $message = '';
    if(isset($_POST['submit'])) {
        $username = '';
        require './scripts/WIPscript_user_connect.php';
        // On nettoie ce que l'utilisateur a saisi afin de s'assurer que ce n'est pas du code malveillant :
        $name = htmlspecialchars($_POST["username"]);
        $firstname = htmlspecialchars($_POST["firstname"]);
        $username = htmlspecialchars($_POST["surname"]);
        $password = htmlspecialchars($_POST["password"]);
        $repass = htmlspecialchars($_POST["repass"]);
        /* Ici l'utilisateur souhaitant s'inscrire devait taper 2 fois le mot de passe qu'il souhaite définir pour son compte
        Donc il y a 2 variables pour le mot de passe correspondant aux valeurs des 2 champs de mot de passe
        */
        // On teste si les 2 mots de passe saisis sont identiques
        if($pass != $repass) {
            $message = "Mots de passe non identiques !";
            return $message;
        }
        // On prépare la requête SQL adéquate :
        $req = $pdo->prepare("SELECT id FROM users WHERE user_username=?");
        // On déclare la gestion des messages PDO :
        $req -> setFetchMode(PDO::FETCH_ASSOC);
        // On exécute la requête :
        $req -> execute(array($username));
        /* On récupère le résultat de la requête (1 seul résultat possible puisque le champ user_login est déclaré 'unique' dans la table users) et on le sotcke dans un tableau :
        */
        $tab = $req->fetchAll();
        /* Si le login choisi lors de la saisie correspond à celui d'un utilisateur déjà existant, on invite l'utilisateur a choisir un autre login (pour rappel, user_login est déclaré unique dans la table users) :
        */
        switch ($tab) {
            case 0 : $tab='';
                $message = "L'utilisateur existe déjà !";
                return $message;
            case 1 : 
        /* Si le login n'existe pas déjà dans la base
        */
            // On encrypte le mot de passe via la fonction password_hash() :
                $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
                // On prépare la requête SQL adéquate :
                $ins = $pdo -> prepare("INSERT INTO user(user_username, user_firstname, user_surname, user_gender, user_password, user_street, user_city, user_zipcode, user_email, user_tel, user_inscription_date) VALUES(?,?,?,?,?,?,?,?,?,?,now())");
                // On exécute la requête :
                $ins -> execute(array($username,$userFirstname,$userSurname, $userGender,$encrypted_password,$userStreet,$userCity,$userZipcode,$userEmail,$userTel,$userInscriptionDate));
                $ins = $pdo -> prepare("INSERT INTO child(child_firstname, child_surname, child_dob, child_allergies, child_board, child_inscription_date)) VALUES(?,?,?,?,?,now())");
                $ins -> execute(array($childFirstname, $childSurname, $childDob, $childAllergies, $childBoard, $childInscriptionDate));
                session_start();
                $_SESSION['userValidated']= "Compte créé avec succès.";
                redirect('index.php');
            case 2 : 
        }
        
    }

    //inscription du parent (client) crée automatiquement une inscription d'un enfant minimum//
?>