<?php
  $sql = 'SELECT posts.*,
          authors.name as "authors_name",
          categories.name as "categories_name"
          FROM `posts`
          LEFT JOIN `authors` ON posts.authors_id = authors.id
          LEFT JOIN `categories` ON posts.categories_id = categories.id';
  $pdoStatement = $pdo->query($sql);
  $results = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $post) :
?>
<div class="card paperBlog">
  <div class="card-body">
    <h2 class="card-title"><?= $post['title'] ?></h2>
    <p class="card-text"><?= $post['excerpt'] ?></p>
    <span>Posté par <a href="#" class="card-link"><?= $post['authors_name'] ?></a> le <time>13 juillet 2017</time> dans <a href="#" class="card-link"><?= $post['categories_name'] ?></a></span>
  </div>
</div>
<?php
endforeach;
?>
