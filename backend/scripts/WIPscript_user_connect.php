<?php
    require './config/database_connection.php';
    require './classes/user/client.class.php';
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
    // On cherche l'utilisateur dans la base
    if(isset($_POST['submit'])) {
        // On nettoie ce que l'utilisateur a saisi afin de s'assurer que ce n'est pas du code malveillant :
        $username = htmlspecialchars($_POST["username"]); 
        $password = htmlspecialchars($_POST["password"]);
        /* Il faut toujours construire les requêtes SQL via les fonctions prepare() et execute()
        Pour cela on enverra les paramètres par référence dans la requête préparée via la syntaxe ?
        Autant de ? il y aura au sein de la requête préparée, autant il devra y en avoir au sein du tableau envoyé à la fonction execute()
        On prépare donc la requête SQL adéquate :
        */
        $res = $pdo -> prepare("SELECT * FROM user WHERE user_username = ?");
        // On déclare la gestion des erreurs PDO :
        $res -> setFetchMode(PDO::FETCH_ASSOC);
        // On exécute la requête :
        $res -> execute(array($username));
        /* On récupère le résultat de la requête (1 seul résultat possible puisque le champ user_login est déclaré 'unique' dans la table users) et on le sotcke dans un tableau :
        */
        $tab = $res -> fetchAll();
        /* Test permettant de déterminer si la requête à renvoyé un résultat (si le tableau est vide - fonction empty() -, aucun utilisateur n'existe avec ce 'user_login') :
        */
        if (!empty($tab)) {
            $message = "L'utilisateur n'existe pas.";
        }
        switch ($tab) {
            /* Maintenant nous allons devoir traiter le mot de passe.
            En effet les mots de passe ne doivent jamais être inscrits en brut dans la BDD.
            Ils doivent être cryptés par une méthode que nous verrons plus loin.
            Nous allons donc 'décryter' - fonction password_verify() - le mot de passe qu'a renvoyé la requête et le comparer à celui saisi par l'utilisateur :
            */
            case (password_verify($password, $tab[0]["user_password"]));
                $message = 'Bienvenue';
                session_start();
                unset($_SESSION['userValidated']);
                $_SESSION["userUsername"] = $username;
                redirect('mon_compte_client.php');
            // case $message = 'Données incorrectes';
            case (password_verify($password, $tab[0]["user_password"]) && ($isAdmin= 1));
                $message = 'Bienvenue Admin';
                session_start();
                unset($_SESSION['userValidated']);
                $_SESSION["userUsername"] = $username;
                redirect('mon_compte_admin.php');
            case (password_verify($password, $tab[0]["user_password"])&& ($superAdmin= 1));
                $superAdmin= 1 ;
                $message = 'Bienvenue Super Admin';
                session_start();
                unset($_SESSION['userValidated']);
                $_SESSION["userUsername"] = $username;
                redirect('mon_compte_superAdmin.php');
            }
        }
?>