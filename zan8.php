<?php

$user = 'root';
$pass = '123456';

//try {
//  $dbh = new PDO('mysql:host=localhost;dbname=php', $user, $pass);
//  foreach($dbh->query('SELECT * from post') as $row) {
//    print_r($row);
//  }
//  $dbh = null;
//} catch (PDOException $e) {
//  print "Error!: " . $e->getMessage() . "<br/>";
//  die();
//}
$dbh = new PDO('mysql:host=localhost;dbname=php', $user, $pass);
//$query = $dbh->prepare('SELECT * FROM `post` WHERE `id` =:id');
$query = $dbh->prepare('SELECT * FROM `post` WHERE `create_at` =:create_at');
$id = 3;
//$query->bindParam(':id',$id);
$create_at = '2016-04-22 10:04:08';
$query->bindParam(':create_at', $create_at);

$query->execute();
$result = $query->fetchAll();
var_dump($result);

class BD {
  public $bd;
  public $user;
  public $pass;

  public function getBD() {
    $user = $this->getUser();
    $pass = $this->getPass();
    return $dbh = new PDO('mysql:host=localhost;dbname=php', $user, $pass);
  }

  /**
   * @return mixed
   */
  public function getUser() {
    return $this->user;
  }

  /**
   * @param mixed $user
   */
  public function setUser($user) {
    $this->user = $user;
  }

  /**
   * @return mixed
   */
  public function getPass() {
    return $this->pass;
  }

  /**
   * @param mixed $pass
   */
  public function setPass($pass) {
    $this->pass = $pass;
  }

  public function getSelect($what = '*', $table, $where = 1) {
    $dbh = $this->getBD();
    $query = $dbh->prepare('SELECT $what FROM $table WHERE $where');
    return $query;
  }
}

?>
