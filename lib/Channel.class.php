<?php

class Channel extends AMQPElement
{
  protected $info_items = array(
      'pid', 'user', 'transactional', 'consumer_count', 'messages_unacknowledged'
    );
  
  public function list_channels($info_items = array())
  {
    $items = empty($items) ? $this->info_items : $items;

    $x = peb_encode("[[" . $this->array2AtomFormat($items) . "]]",
          array(array($items)));

    return $this->call('rabbit_channel', 'info_all', $x);
  }
}