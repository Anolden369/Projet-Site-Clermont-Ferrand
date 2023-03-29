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
        <h1>La page d'inscription</h1>
        <h2>S'inscrire<h2>
        </center>
        <br><br>
        <center>
        <div class="card w-75">
            <div class="card">
                <div class="card-header">
                    Inscription
                </div>
                <div class="card-body">
                    <form action="traitement_inscription.php" method="post" class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltip02" class="form-label">Nom</label>
                            <input type="text" name="nom" class="form-control" id="validationTooltip02" required>
                            <div class="valid-tooltip">
                            Ok
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltip01" class="form-label">Prénom</label>
                            <input type="text" name="prenom" class="form-control" id="validationTooltip01" required>
                            <div class="valid-tooltip">
                            Ok
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltipUsername" class="form-label">Pseudo</label>
                            <div class="input-group has-validation">
                                <input type="text" name="pseudo" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                    Merci de choisir pseudo unique et valide
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip03" class="form-label">Mot de passe</label>
                            <input type="password" name="mdp" class="form-control" id="validationTooltip03" required>
                            <div class="invalid-tooltip">
                            Veuillez fournir un mot de passe valide.
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltipUsername" class="form-label">E-mail</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                <input type="email" name="mail" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                    Merci de choisir e-mail unique et valide
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip03" class="form-label">Adresse</label>
                            <input type="text" name="rue" class="form-control" id="validationTooltip03" required>
                            <div class="invalid-tooltip">
                            Veuillez fournir une adresse valide.
                            </div>
                        </div>
                        <div class="col-md-3 position-relative">
                            <label for="validationTooltip05" class="form-label">Code Postal</label>
                            <input type="text" name="cp" class="form-control" id="validationTooltip05" required>
                            <div class="invalid-tooltip">
                            Veuillez fournir un code postal valide.
                            </div>
                        </div>
                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip03" class="form-label">Ville</label>
                            <input type="text" name="ville" class="form-control" id="validationTooltip03" required>
                            <div class="invalid-tooltip">
                            Veuillez fournir une ville valide.
                            </div>
                        </div>
                        <div class="col-md-3 position-relative">
                            <label for="validationTooltip04" class="form-label">Pays</label>
                            <select name="pays" class="form-select" id="validationTooltip04" required>
                            <option selected disabled value="">Choisir...</option>
                            <option>France</option>
                            <option>Belgique</option>
                            <option>Allemagne</option>
                            <option>Suisse</option>
                            </select>
                            <div class="invalid-tooltip">
                                Veuillez sélectionner un pays valide.
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" name="envoi"> S'inscrire </button>
                        </div>
                        <div class="col-12">

                        </div>
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