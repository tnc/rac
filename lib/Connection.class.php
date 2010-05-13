<?php

class Connection extends AMQPElement
{
  protected $info_items = array(
      'user', 'peer_address', 'peer_port', 'state'
    );
  
  public function list_connections($info_items = array())
  {
    $items = empty($items) ? $this->info_items : $items;

    $x = peb_encode("[[" . $this->array2AtomFormat($items) . "]]",
          array(array($items)));

    return $this->call('rabbit_networking', 'connection_info_all', $x);
  }
}