<?php
session_start(); //Demarre une nouvelle session.
session_unset(); //Remet le formulaire a 0.

//Test pour savoir si le Formulaire est envoyée.
if (count($_POST) > 0) {
    //

    //

    //Verification des champs.
    $nom = (empty($_POST['nom'])); //Empty détermine si une variable est vide.

    if ($nom == true) { //Si c'est vrai que "nom" est vide .
        $_SESSION["erreur"]["nom"] = "Le nom doit être renseigné*"; //$_SESSION permet de stocker "erreur" et de d'afficher le message d'erreur
    }
    $prenom = (empty($_POST['prénom']));
    if ($prenom == true) {
        $_SESSION["erreur"]["prénom"] = "Le prénom doit être renseigné*";
    }

    $sexe = (empty($_POST['sexe']));
    if ($sexe == true) {
        $_SESSION["erreur"]["sexe"] = "Veuillez cocher une case*";
    }

    $ddn = (empty($_POST['ddn']));
    if ($ddn == true) {
        $_SESSION["erreur"]["ddn"] = "Veuillez saisir une date de naissance*";
    } else {
        $valid_ddn = "#^\d{4}\-\d{2}\-\d{2}$#";
        if (!preg_match($valid_ddn, $_POST['ddn'])) {
        $_SESSION["erreur"]["ddn"] = "Le format de la date de naissance est incorrect*";
        }
    }

    $cp = (empty($_POST['cp']));
    if ($cp == true) {
        $_SESSION["erreur"]["cp"] = "Le Code postal doit être renseigné*";
    }

    $adresse = (empty($_POST['adresse']));
    if ($adresse == true) {
        $_SESSION["erreur"]["adresse"] = "L'adresse doit être renseigné*";
    }

    $ville = (empty($_POST['ville']));
    if ($ville == true) {
        $_SESSION["erreur"]["ville"] = "Le ville doit être renseigné*";
    }

    $email = (empty($_POST["email"]));
    if ($email == true) {
        $_SESSION["erreur"]["email"] = "l'adresse mail doit être remplie*";
    } else {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == "") { //filter_var permet de filtrer les données entrées et retoure false si le filtre a échouée.
            $_SESSION["erreur"]["email"] = "L'adresse email 'est invalide*"; //FILTER_VALIDATE_EMAIL permet de valider une adresse de courriel selon la syntaxe défini par la RFC 822.

        }
    }

    $condition = (empty($_POST["condition"]));
    if ($condition == true) {
        $_SESSION["erreur"]["condition"] = "La condition doit êre accepter*";
    }

    if (!isset($_SESSION["erreur"]) || count($_SESSION["erreur"]) == 0) { //dans les 2 cas on demande a se que le formulaire soit envoyer

        $_SESSION["valider"] = "Le formulaire a été envoyer ";
    }
}

header("location:formulaire.php");//Permet de remettre le formulaire apès envoie.
