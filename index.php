<?php
require(__DIR__.'/classes/DBData.php');

$dbdata = new DBData();

$allResults = $dbdata->getPosts('DESC', 2, 0);

$listAuthors = $dbdata->getAuthors();
$listCategories = $dbdata->getCategories();

require(__DIR__.'/templates/accueil.php');

?>
