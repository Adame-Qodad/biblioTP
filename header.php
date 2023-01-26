<body>
    
    <nav class="navbar navbar-expand-md navbar-danger fixed-top bg-danger">
      <a class="navbar-brand" href="index.php">Ma bibliothèque</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Genre</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Type de genre</a>
              <a class="dropdown-item" href="#">Ajouter un genre</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Auteur</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Liste des auteurs</a>
              <a class="dropdown-item" href="#">Chercher un auteur</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Gestion Nationalitées</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="listeNationalites.php">Liste des nationalitées</a>
              <a class="dropdown-item" href="#">Ajouter une nationalitée</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

</body>