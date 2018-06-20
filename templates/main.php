
    <!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
    <div class="container">

      <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
      <div class="row justify-content-center">

        <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
        <main class="col-lg-9 col-sm-10">

          <?php require_once 'articles.php' ?>

          <!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
          <nav class="d-none d-lg-block" aria-label="Page navigation example">
            <ul class="pagination justify-content-between">
              <li class="page-item"><a class="page-link" href="#"><i class="fas fa-arrow-left"></i> Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">Next <i class="fas fa-arrow-right"></i></a></li>
            </ul>
          </nav>

        </main>
