<?php

class Queue extends AMQPElement
{
  protected $info_items = array(
    'name',
    'durable',
    'auto_delete',
    'arguments',
    'messages_ready',
    'messages_unacknowledged',
    'messages_uncommitted',
    'messages',
    'acks_uncommitted',
    'consumers',
    'transactions',
    'memory',
    );
  
  public function list_queues($vhost = "/")
  {
    $x = peb_encode("[~b]", array(array($vhost)));
    return $this->call("rabbit_amqqueue", "list", $x);
  }
  
  public function info_all($vhost, $items = array())
  {
    $items = empty($items) ? $this->info_items : $items;
    
    $x = peb_encode("[~b, [" . $this->array2AtomFormat($items) . "]]", array(array(
        $vhost, 
        $items
      )));
      
    return $this->call("rabbit_amqqueue", "info_all", $x);
  }
  
  public function stat_all()
  {
    $x = peb_encode("[]", array(array()));
    return $this->call('rabbit_amqqueue', 'stat_all', $x);
  }
  
  public function list_consumers($vhost)
  {
    $x = peb_encode("[~b]", array(array($vhost)));
    return $this->call('rabbit_amqqueue', 'consumers_all', $x);
  }
  
  public function delete($queue_name)
  {
    $x = peb_encode("[~b]", array(array($queue_name)));
    return $this->call('rabbit_amqqueue', 'internal_delete', $x);
  }
}