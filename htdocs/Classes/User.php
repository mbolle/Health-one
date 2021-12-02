<?php

class User
{
  public $id;
  public $email;
  public $password;
  public $first_name;
  public $last_name;
  public $role;

  public function _construct()
  {
    settype($this->id, 'integer');
  }
}