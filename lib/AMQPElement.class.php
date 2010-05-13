<?php

class AMQPElement
{
  protected $conn;
  
  public function __construct($conn)
  {
    $this->conn = $conn;
  }
  
  public function call($module, $function, $args)
  {
    $result = peb_rpc($module, $function, $args, $this->conn);
    return peb_decode($result);
  }
  
  public function array2AtomFormat($items)
  {
    return implode(', ', array_fill(0, count($items), '~a'));
  }
}