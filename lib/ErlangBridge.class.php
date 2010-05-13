<?php

class ErlangBridge
{
  protected static $instance = null;
  protected $link;
  
  protected function __construct()
  {}
  
  public static function getInstance()
  {
    if(null === self::$instance)
    {
      self::$instance = new ErlangBridge();
    }
    
    return self::$instance;
  }
  
  public function getConnection()
  {
    if(!$this->link)
    {
      $this->link = peb_connect(RABBITMQ_HOST, RABBITMQ_COOKIE);
      if(!$this->link)
      {
        throw new Exception("can't connect to Erlang Node");
      }
    }
    
    return $this->link;
  }
}