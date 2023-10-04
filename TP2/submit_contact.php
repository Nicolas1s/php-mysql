<!-- index.php -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <?php include_once('header.php'); ?>
        <h1>Site de recettes</h1>

        <!-- inclusion des variables et fonctions -->
        <?php
        include_once('variables.php');
        include_once('functions.php');
        ?>

        <!-- inclusion de l'entête du site -->
        <?php include_once('header.php'); ?>

        <?php

        if (
            (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            || (!isset($_POST['message']) || empty($_POST['message']))
        ) {
            echo ('<h1>Il faut un email et un message valides pour soumettre le formulaire.</h1>');
            return;
        }
        ?>

        <strong>Badaboum</strong>
        <p><b>Message</b> : <strong>Badaboum</strong></p>
        <p><b>Message</b> :
            <script>alert('Badaboum')</script>
        </p>
        <p><b>Message</b> :
            <?php echo htmlspecialchars($_POST['message']); ?>
        </p>
        <p><b>Message</b> : &lt;strong&gt;Badaboum&lt;/strong&gt; ?></p>

        <?php
        // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
        if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0) {
            // Testons si le fichier n'est pas trop gros
            if ($_FILES['screenshot']['size'] <= 1000000) {
                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['screenshot']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                if (in_array($extension, $allowedExtensions)) {
                    // On peut valider le fichier et le stocker définitivement
                    move_uploaded_file(
                        $_FILES['screenshot']['tmp_name'],
                        'uploads/' . basename($_FILES['screenshot']['name'])
                    );
                    echo "L'envoi a bien été effectué !";
                }
            }
        }
        ?>

    </div>

    <!-- inclusion du bas de page du site -->
    <?php include_once('footer.php'); ?>
</body>

</html>