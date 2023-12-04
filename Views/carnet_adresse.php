<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Style/style.css">
</head>
<body>
    <section class="first_part">
        <h2 style="font-size: 20px;">Enregistrer contact dans votre carnet d'adresse</h2>

        <form action="../Controllers/enregistrerContact.php" method="POST">
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
        <h2>Resultat</h2>
        <div>
            Bazene | Q.Himbi Av.Walikale | 0975149026 | serge@gmail.com
        </div>
    <section>
</body>
</html>