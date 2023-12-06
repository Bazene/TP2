<?php

    include_once "../configuration/config.php";
    include_once "../Modeles/contact.php";

    function getContacts() {
        return $contacts = Contact :: getContacts();
    }