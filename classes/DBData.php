<?php
class DBData {

  private $pdo;

  public function __construct() {
    $dsn = 'mysql:dbname=oblog;host=localhost;charset=UTF8';
    $username = 'oblog';
    $password = 'oblog';
    try {
        $this->pdo = new PDO(
            $dsn,
            $username,
            $password,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
        );
    }
    catch (PDOException $e) {
        die('Connection failed');
    }
  }
  // Méthode getPosts: Permet de retourner plusieurs posts.
  public function getPosts($order = 'DESC', $nbr = null, $start = 0, $categorieID = null) {
    $sql = "SELECT
              posts.id AS 'posts_id',
              posts.published_date,
              posts.short_text,
              posts.title,
              authors.name AS 'authors_name',
              authors.id AS 'authors_id',
              categories.name AS 'categories_name',
              categories.id AS 'categories_id'
            FROM posts
            INNER JOIN authors
              ON posts.authors_id = authors.id
            INNER JOIN categories
              ON posts.categories_id = categories.id
            WHERE categories.id ";
    if(!is_null($categorieID)){
      $sql .= '= '.$categorieID;
    }

    $orderList = array('ASC', 'DESC');
    // Si j'ai bien un ordre proposé
    // http://php.net/manual/fr/function.in-array.php
    if (in_array($order, $orderList)) {
      // J'/templates/categorie.php?categorie=Teamfrontajoute l'ordre proposé à mon SQL
      $sql .= ' ORDER BY posts.published_date '.$order;
    }
    // Si j'ai un arguement pour mettre une limite
    if (!is_null($nbr) && is_int($nbr) && is_int($start)) {
      // J'ajoute ma limite dans mon SQL
      $sql .= ' LIMIT '.$start.','.$nbr;
      /*
        Equivault à
        $sql .= ' LIMIT ';
        $sql .= $start.','.$nbr;
      */
    }



    $pdoStatement = $this->pdo->query($sql);
    $allResults = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    return $allResults;
  }

  public function getPost($post_id = 1) {
    $sql = "SELECT
                posts.id AS 'posts_id',
                posts.published_date,
                posts.text,
                posts.title,
                posts.views,
                authors.name AS 'authors_name',
                authors.id AS 'authors_id',
                categories.name AS 'categories_name',
                categories.id AS 'categories_id'
            FROM
                posts
            INNER JOIN authors
                ON posts.authors_id = authors.id
            INNER JOIN categories
              ON posts.categories_id = categories.id
            WHERE
            	posts.id = ";
    $sql .= $post_id;
    $pdoStatement = $this->pdo->query($sql);
    $result = $pdoStatement->fetch(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getCategories($order = 'ASC') {
    $sql = 'SELECT * FROM categories ORDER BY position ';
    $orderList = array('ASC', 'DESC');
    // Si j'ai bien un ordre proposé
    // http://php.net/manual/fr/function.in-array.php
    if (in_array($order, $orderList)) {
      // J'ajoute l'ordre proposé à mon SQL
      $sql .= $order;
    }
    $pdoStatement = $this->pdo->query($sql);
    $allResults = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    return $allResults;
  }

  public function getAuthors($order = 'ASC') {
    $sql = 'SELECT * FROM authors ORDER BY name ';
    $orderList = array('ASC', 'DESC');
    // Si j'ai bien un ordre proposé
    // http://php.net/manual/fr/function.in-array.php
    if (in_array($order, $orderList)) {
      // J'ajoute l'ordre proposé à mon SQL
      $sql .= $order;
    }
    $pdoStatement = $this->pdo->query($sql);
    $allResults = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    return $allResults;
  }
}
