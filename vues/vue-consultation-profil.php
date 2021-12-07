<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php 
        session_start();
    ?>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Consultation de Votre Profil</h5>
            <p class="card-text">
                Nom : <?php echo $_SESSION[ 'nom' ]?></br>
                Prénom : <?php echo $_SESSION[ 'prenom' ]?></br>
                Date de Naissance : <?php echo $_SESSION[ 'dateNaissance' ]?></br>
                Email : <?php echo $_SESSION[ 'email' ]?></br>
                Adresse :  <?php echo $_SESSION[ 'adresse' ]?> <?php echo $_SESSION[ 'codePostal' ]?> <?php echo $_SESSION[ 'ville' ]?></br>
                Téléphone : <?php echo $_SESSION[ 'telephone' ]?>
            </p>
        </div>
    </div>

</body>

</html>