<?php

    include('./include/connexion.php');

    if(isset($_POST['envoyer']))
    {
        if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['mail']) AND isset($_POST['message']))
        {
            if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
            {
                $nom = htmlspecialchars($_POST['nom']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $mail = htmlspecialchars($_POST['mail']);
                $message = htmlspecialchars($_POST['message']);
                
                $requete = $connexion->prepare("INSERT INTO messages (nom, prenom, mail, message) VALUES (:nom, :prenom, :mail, :message)");
                $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
                $requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
                $requete->bindValue(':mail', $mail, PDO::PARAM_STR);
                $requete->bindValue(':message', $message, PDO::PARAM_STR);
                $requete->execute();

                header('Location: index.html#contact');
            }
        }
    }

?>