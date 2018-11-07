<p>Bonjour !</p>

<p>Tu t'appelles <?php echo htmlspecialchars($_POST["prenom"]); ?> !</p>
<p>Ton nom de famille : <?php echo htmlspecialchars($_POST["nom"]); ?> !
<p>Ta date de naissance : <?php echo htmlspecialchars($_POST["date"]); ?>
<p>Tu est <?php echo htmlspecialchars($_POST["sexe"]); ?>
<p>Ton email : <?php echo htmlspecialchars($_POST["email"]); ?>

<p>Si tu veux changer une info, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>

<p>Ton message : <?php echo htmlspecialchars($_POST['message']); ?></p>

<?php
//creation de variable qui recupere le contenu du formulaire//
$message = $_POST["message"];
$headers = "FROM : $email";
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$date = $_POST["date"];
$sexe = $_POST["sexe"];
$email = $_POST["email"];
$contenu = "ton message: ".$message."\nton nom: ".$nom."\nton prenom: ".$prenom."\nta date de naissance: ".$date."\ntu est ".$sexe;

//fonction qui envoi le mail ('mail destinataire', 'sujet', 'contenu du mail', 'header')//////
mail('dcl.jeanphig@18pixel.fr', 'Formulaire', $contenu, $headers);

?>