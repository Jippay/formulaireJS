    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css" class="css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <title>Formulaire Javascript/php</title>
    </head>
    <body>
        <header>
            <h1>Formulaire</h1>
        </header>
        <form class="formulaire" method="post" action="cible.php">
            <div class="champForm">
                <div class="nomPrenom">
                    <input type="text" name="nom" class="nom" id="nom" placeholder="Nom"></p>
                    <input type="text" name="prenom" class="prenom" id="prenom" placeholder="Prenom"></p>
                </div>
                <div class="date">
                    <p class="dateTitre">Date de naissance</p>
                    <input type="date" name="date" class="birthday" >
                </div>
                <div class="sexe">
                    <p><label>Homme</label><input type="radio" name="sexe" class="male" value="un homme"></p>
                    <p><label>Femme</label><input type="radio" name="sexe" class="female" value="un femme"></p>
                </div>
                <input type="text" name="email" class="email" placeholder="email"></p>
                <label for="msg">Message :</label>
                <textarea id="msg" name="message"></textarea>
                </div>
            </div>
            <input type="submit" class="envoyer" value="Envoyer">
        </form>

        <script src="script.js"></script>
    </body>
    </html>