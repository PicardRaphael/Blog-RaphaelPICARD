<?php
foreach ($allResults as $post) :
?>
<div class="card paperBlog">
  <div class="card-body">
    <h2 class="card-title"><?= $post['title'] ?></h2>
    <p class="card-text"><?= $post['short_text'] ?></p>
    <span>Posté par <a href="#" class="card-link"><?= $post['authors_name'] ?></a> le <time>13 juillet 2017</time> dans <a href="#" class="card-link"><?= $post['categories_name'] ?></a></span>
  </div>
</div>
<?php
endforeach;
?>
