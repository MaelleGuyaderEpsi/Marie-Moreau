<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./css/connexion.css" type="text/css" media="screen">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    </head>

    <body>
        <div class="retour">
            <a href="index.php"><img src="./Images/Illustrations/SVG/Back.svg"/></a>
        </div>

        <div class="titre">
            Connexion
        </div>

        <div id="ecran">
            <div class="formulaire">
                <form action="accueil.php" meta="post">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Adresse e-mail</label>
                        <input name="email" type="email" class="form-control" id="">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input name="mdp" type="password" class="form-control" id="">
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exempleCheck1">
                        <label classe="form-check-label" for="exempleCheck1"> Rester Connecté</label>
                    </div>

                    <div id="bouttonDemarrer">
                        <button id="bouttonDemarrerBis" type="submit" name="action">
                            <div id="textBoutton">Connexion</div>
                        </button>
                    </div>

                    <div class="lien">
                        <a id="lienMot" href="#">Mot de passe oublié</a>
                    </div>
                </form>
            </div>
        </div>
    </body>

</html>
