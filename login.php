<?php

include 'includes/menu.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <br><h1>Espace membre</h1><br>
            
        </div>
    </div>

    

    <div class="row">
        <div class="col-md-5 col-md-offset-2">
            <form method="post" action="connexion.php">

                <div class="form-group">
                    <label for="email">E mail:</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="prenom">Mot de passe:</label>
                    <input type="password" class="form-control" name="mdp" id="mdp">
                </div>

                <input type="submit" class="form-control" value="Envoyer">
            </form>
        </div>
    </div>





</div>
