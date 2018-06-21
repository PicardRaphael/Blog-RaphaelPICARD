<?php
require(__DIR__.'/classes/DBData.php');

$dbdata = new DBData();

$allResults = $dbdata->getPosts('DESC', 2, 0);

$listAuthors = $dbdata->getAuthors();
$listCategories = $dbdata->getCategories();

require_once 'templates/header.php';

require_once 'templates/main.php';

require_once 'templates/aside.php';

require_once 'templates/footer.php';
?>
