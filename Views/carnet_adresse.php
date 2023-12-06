<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carnet d'adresse</title>
    <link rel="stylesheet" href="../Style/style.css">
</head>
<body>
    
    <?php include_once "../Controlleurs/c_getContacts.php"; ?>

    <section class="first_part">
        <h2 style="font-size: 20px;">Enregistrer contact dans votre carnet d'adresse</h2>

        <form action="../Controlleurs/enregistrerContact.php" method="POST">
            <div class="inputs" style="display:flex; flex-direction:column;">
                    <input type="text" name="nom" placeholder="nom" required>
                    <input type="text" name="adresse" placeholder="adresse" required>
                    <input type="text" name="numTel" placeholder="Numero Téléphone" required>
                    <input type="text" name="adresseMail" placeholder="Adresse mail" required>
                </div>
                
                <div class="inputs_submit">
                    <input type="submit" value="Enregistrer">
                </div>
        </form>
    </section>

    <section class="second_part">
        <h2>Contacts</h2>
        <section class="enTete"> 
            <p class='nom'>Nom</p>
            <p class='adresse'>Adresse </p>
            <p class='numTel'>Num Tel</p>
            <p class='adresseMail'>Mail</p>
        </section>

        <?php 
            $contacts = getContacts();
            foreach($contacts as $contact) {
                echo
                "
                    <section class='affichage' style='width:90%;'>
                        <div>
                            <p class='nom'>".$contact->getNom()."</p>
                            <p class='adresse'>| ".$contact->getAdresse()."</p>
                            <p class='numTel'>| ".$contact->getNumTel()."</p>
                            <p class='adresseMail'>| ".$contact->getAdresseMail()."</p>
                        </div>
                    </section>
                ";
            }
        ?>
    <section>
</body>
</html>