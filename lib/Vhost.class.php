<?php

class Vhost extends AMQPElement
{
  public function add($vhost)
  {
    $x = peb_encode("[~b]", array(array($vhost)));

    return $this->call('rabbit_access_control', 'add_vhost', $x);
  }
  
  public function delete($vhost)
  {
    $x = peb_encode("[~b]", array(array($vhost)));

    return $this->call('rabbit_access_control', 'delete_vhost', $x);
  }
  
  public function list_vhosts()
  {
    $x = peb_encode("[]", array(array()));

    return $this->call('rabbit_access_control', 'list_vhosts', $x);
  }
  
  public function list_vhost_permissions($vhost)
  {
    $x = peb_encode("[~b]", array(array($vhost)));

    return $this->call('rabbit_access_control', 'list_vhost_permissions', $x);
  }
}