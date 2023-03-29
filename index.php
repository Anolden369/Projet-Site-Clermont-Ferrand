<?php
include('entete.php');
?>
<!doctype html>
<html lang="fr">
<link href="connexion.css" rel="stylesheet">
<br><br><br><br>
<body style="background-color:#E5E5E5;">
    <center>
        <br>
        <h1>Bienvenue sur le site de la mairie de Clermont-Ferrand</h1>
        <h2>Voici la liste des lieux à visiter à Clermont-Ferrand<h2>
        <br>
    </center>
    <center>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/Inauguration_vercingetorix_et_opera.JPG/1280px-Inauguration_vercingetorix_et_opera.JPG" class="d-block w-50" width="150" height="600">
                <div class="carousel-caption d-none d-md-block">
                    <font color="white">
                    <h5>Place de Jaude</h5>
                    <p> 78 Boulevard Edit Pierre </p>
                    </font>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                    <img src="https://static.apidae-tourisme.com/filestore/objets-touristiques/images/7/65/8798471.jpg" class="d-block w-50" width="150" height="600">
                    <div class="carousel-caption d-none d-md-block">
                    <font color="white">
                    <h5>Stade Nautique Pierre-de-Coubertin</h5>
                    <p>78 Rue Pierre de Coubertin</p>
                    </font>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                    <img src="https://www.clermontauvergnetourisme.com/wp-content/uploads/external/8804141-1600x900.jpg" class="d-block w-50" width="150" height="600">
                <div class="carousel-caption d-none d-md-block">
                    <font color="white">
                    <h5>Jardin Lecoq</h5>
                    <p>Boulevard François Mitterrand, Av. Vercingétorix</p>
                    </font>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </center>
    <?php
	include('piedpage.php');
	?>
</body>
</html>