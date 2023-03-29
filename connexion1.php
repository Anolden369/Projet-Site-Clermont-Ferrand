<?php
include('entete.php');
?>
<!doctype html>
<html lang="fr">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
<br><br><br><br>
    <body style="background-color:#E5E5E5;">
        <center>
        <h1>La page de connexion</h1>
        <h2>Se connecter<h2>
        </center>
        <br><br>
        <center>
        <div class="card w-75">
            <div class="card">
                <div class="card-header">
                    Connexion
                </div>
                <div class="card-body">
                    <form action="traitement_connexion1.php" method="post" class="row g-1 needs-validation" novalidate>
                        <table>
                            <tr>
                                <td>
                                    <div class="col-md-4 position-relative">
                                        <label for="validationTooltipUsername" class="form-label">Pseudo</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="pseudo" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                            <div class="invalid-tooltip">
                                                Merci de choisir pseudo unique et valide
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-4 position-relative">
                                        <label for="validationTooltip03" class="form-label">Mot de passe</label>
                                        <input type="password" name="mdp" class="form-control" id="validationTooltip03" required>
                                        <div class="invalid-tooltip">
                                        Veuillez fournir un mot de passe valide.
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>
                                    <div class="col-12">
                                        <br>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit" name="envoi"> Se connecter </button>
                                    </div>
                                    <div class="col-12">

                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        </center>
            <?php
	include('piedpage.php');
	?>
    </body>
</html>