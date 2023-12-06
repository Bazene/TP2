<?php
    include_once "../configuration/config.php";
    include_once "../Modeles/contact.php";

    if($_POST) {
        $nom = $_POST['nom'];
        $adresse = $_POST['adresse'];
        $numTel = $_POST['numTel'];
        $adresseMail = $_POST['adresseMail'];

        $contact = new Contact($nom, $adresse, $numTel, $adresseMail);

        if($contact->enregistrerContact()) {
            header("Location:../Views/carnet_adresse.php");
        }
    }