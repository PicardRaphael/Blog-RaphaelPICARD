    <!-- NAV -->
    <nav id="navbar" class="navbar navbar-expand-sm navbar-light">
      <!--(media-query) définie dans Bootstrap :
          sm => 575px
          md => 768px
          lg => f2px
          xl => 1200px
      -->
      <a class="navbar-brand" href="index.php">A la dérive</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        Menu <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Cette partie va automatique être masquée en version mobile -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link" href="categorie.php?categorieID=3">TeamBack</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="categorie.php?categorieID=2">TeamFront</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="categorie.php?categorieID=4">Collaboration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="categorie.php?categorieID=1">Ma vie de dev</a>
          </li>
        </ul>
      </div>
    </nav>
