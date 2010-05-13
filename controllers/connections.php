<?php

function list_connections()
{
  $connection = new Connection(ErlangBridge::getInstance()->getConnection());
  
  $rs = $connection->list_connections();
  
  set('info', $rs[0]);
  
  return render('connections.html.php');
}
?>