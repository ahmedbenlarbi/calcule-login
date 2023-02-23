<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulaire de connexion </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>

<body>
    <form action="users3.php" method="post">
        <h1>Se connecter</h1>
        <div class="social-media">
            <p><a href="https://www.google.com/profile">
                    <i class="fab fa-google"></i> </a>
            </p>
            <p><a href="https://www.youtube.com/profile">
                    <i class="fab fa-youtube"></i></a>
            </p>
            <p><a href="https://www.facebook.com/profile">
                    <i class="fab fa-facebook-f"></i></a>
            </p>
            <p><a href="https://www.twitter.com/profile">
                    <i class="fab fa-twitter"></i> </a>
            </p>
        </div>
        <p class="choose-email">ou utiliser mon adresse e-mail :</p>

        <div class="inputs">
            <!-- <input type="text" name="name" id=""placeholder="Name" />  <br></br> -->
            <input type="email" name="email" id="" placeholder="Email" /> <br></br>
            <input type="password" name="password" id="" placeholder="Mot de passe"> <br></br>
        </div>
        <div align="center">
            <button type="submit">Se connecter</button>
    </form>
    <p class="inscription"> <br></br> Je n'ai pas de
        <span>compte</span>
    <form action="inscription.html" method="post">
        <button class="idd" type="submit">Créer un compte</button>
    </form>
    </p>
    </div>



</body>

</html>