<?php
class Exchange extends AMQPElement
{
  protected $info_items = array(
      'name', 
      'type', 
      'durable', 
      'auto_delete', 
      'arguments'
    );
  
  public function list_exchanges($vhost = "/")
  {
    $x = peb_encode("[~b]", array(array($vhost)));
    return $this->call('rabbit_exchange', 'list', $x);
  }
  
  public function list_bindings($vhost = "/")
  {
    $x = peb_encode("[~b]", array(array($vhost)));
    return $this->call('rabbit_exchange', 'list_bindings', $x);
  }
  
  public function info_all($vhost, $items = array())
  {
    $items = empty($items) ? $this->info_items : $items;
    
    $x = peb_encode("[~b, [" . $this->array2AtomFormat($items) . "]]", array(array(
        $vhost, 
        $items
      )));
      
    return $this->call('rabbit_exchange', 'info_all', $x);
  }
}