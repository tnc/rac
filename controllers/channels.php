<?php

function list_channels()
{
  $channel = new Channel(ErlangBridge::getInstance()->getConnection());
  
  $rs = $channel->list_channels();
  
  set('info', $rs[0]);
  
  return render('channels.html.php');
}
?>