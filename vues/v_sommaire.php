
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav mr-auto" style="margin-left: 70px;">
            <li class="nav-item">
                <a class="nav-link" href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
            </li>
        </ul>
        <li class="nav-item dropdown" style="list-style: none;margin-right: 70px;margin-left: 70px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="./images/profil.svg" alt="profil" title="profil" height="35px" width="35px" style="border-radius: 50%;"/>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#"><?php echo $_SESSION['nom']." ".$_SESSION['prenom']; ?></a>
                <a class="dropdown-item" href="#"><?php echo $_SESSION['poste']; ?></a>
                <a class="dropdown-item" href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
            </div>
        </li>
    </div>
</nav>