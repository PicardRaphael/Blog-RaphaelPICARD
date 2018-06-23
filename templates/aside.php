  <aside class="col-lg-3 d-none d-lg-block">
    <!-- Champ de recherche: https://getbootstrap.com/docs/4.1/components/input-group/ -->
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Rechercher un article..." aria-label="Rechercher un article..." aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button">Allez</button>
      </div>
    </div>

    <!-- Catégories: https://getbootstrap.com/docs/4.1/components/card/#list-groups-->
    <div class="card">
      <h3 class="card-header">Catégories</h3>
      <ul class="list-group list-group-flush">
        <?php foreach($listCategories as $categorie) : ?>
        <li class="list-group-item"><?= $categorie['name'] ?></li>
        <?php endforeach;?>
      </ul>
    </div>

    <!-- Auteurs: https://getbootstrap.com/docs/4.1/components/card/#list-groups -->
    <div class="card">
      <h3 class="card-header">Auteurs</h3>
      <ul class="list-group list-group-flush">
        <?php foreach($listAuthors as $author) : ?>
        <li class="list-group-item"><?= $author['name'] ?></li>
        <?php endforeach;?>
      </ul>
    </div>

  </aside>

</div><!-- /.row -->
</div><!-- /.container -->
