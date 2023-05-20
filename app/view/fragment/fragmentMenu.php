
<!-- ----- début fragmentCaveMenu -->

<nav class="navbar navbar-expand-lg bg-success fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="router1.php?action=CaveAccueil">POUNA-DIFFO|Administrateur| <?php /*$nom?*/echo'nom'.'|';?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">administrateur</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="router2.php?action=specialiteReadAll">Liste des spécialités</a></li>
            <li><a class="dropdown-item" href="router2.php?action=vinReadId">Sélection d'une spécialité par son id</a></li>
            <li><a class="dropdown-item" href="router2.php?action=vinCreate">Insertion d'une nouvelle spécialité</a></li>
            <li><a class="dropdown-item" href="router2.php?action=vinCreate">Liste des praticiens avec leur spécialité</a></li>
            <li><a class="dropdown-item" href="router2.php?action=vinCreate">Nombre de praticiens par patient</a></li>
            <li><a class="dropdown-item" href="router2.php?action=vinCreate">Info</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Innovations</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="router1.php?action=vinReadAll">Liste des spécialités</a></li>
            <li><a class="dropdown-item" href="router1.php?action=vinReadId"></a></li>
            <li><a class="dropdown-item" href="router1.php?action=vinCreate">Insertion d'un vin</a></li> 
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">se connecter</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="router1.php?action=mesPropositions">login</a></li>
            <li><a class="dropdown-item" href="router1.php?action=mesPropositions">s'inscrire</a></li>
            <li><a class="dropdown-item" href="router1.php?action=mesPropositions">déconnexion</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav> 

<!-- ----- fin fragmentCaveMenu -->


