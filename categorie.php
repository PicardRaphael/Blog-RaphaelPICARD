<?php
require(__DIR__.'/classes/DBData.php');

$dbdata = new DBData();
$idCat = intval($_GET['categorieID']);
$allResults = $dbdata->getPosts('DESC', null, 0, $idCat);
$listAuthors = $dbdata->getAuthors();
$listCategories = $dbdata->getCategories();

require(__DIR__.'/templates/categorie.php');

?>
