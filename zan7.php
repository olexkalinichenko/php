<?php

class User {
  public $name = 'UserName';
  public $email;
  public $password;
  public $role = 'user';

  /**
   * @return mixed
   */
  public function getName() {
    return $this->name;
  }

  /**
   * @param mixed $name
   */
  public function setName($name) {
    if ($name !='' && is_string($name)){
    $name = ucfirst(mb_strtolower($name));
      $this->name = $name;
    }

  }

  /**
   * @return string
   */
  public function getRole() {
    return $this->role;
  }

  /**
   * @param string $role
   */
  public function setRole($role) {
    $this->role = $role;
  }


 

  /**
   * @return mixed
   */
  public function getEmail() {
    return $this->email;
  }

  /**
   * @param mixed $email
   */
  public function setEmail($email) {
    $this->email = $email;
  }

}
$name = new User();
var_dump($name);
$name->setName(Sasha);
var_dump($name);


?>
