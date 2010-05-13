<?php

class User extends AMQPElement
{
  public function add_user($username, $password)
  {
    $x = peb_encode("[~b, ~b]", array(array($username, $password)));

    return $this->call('rabbit_access_control', 'add_user', $x);
  }
  
  public function delete_user($username)
  {
    $x = peb_encode("[~b]", array(array($username)));

    return $this->call('rabbit_access_control', 'delete_user', $x);
  }
  
  public function change_password($usernames, $newpassword)
  {
    $x = peb_encode("[~b, ~b]", array(array($username, $password)));

    return $this->call('rabbit_access_control', 'change_password', $x);
  }
  
  public function list_users()
  {
    $x = peb_encode("[]", array(array()));

    return $this->call('rabbit_access_control', 'list_users', $x);
  }
  
  public function list_user_permissions($user)
  {
    $x = peb_encode("[~b]", array(array($user)));

    return $this->call('rabbit_access_control', 'list_user_permissions', $x);
  }
}