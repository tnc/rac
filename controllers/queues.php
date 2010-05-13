<?php
function list_queues(){
  
  $queue = new Queue(ErlangBridge::getInstance()->getConnection());
  
  $rs = $queue->info_all(base64_decode(params('vhost')), array('name', 'messages', 'consumers', 'durable', 'auto_delete', 'memory'));

  $info = array();

  foreach($rs[0] as $k=>$v)
  {
    $tmp = array();
    foreach($v as $info_item)
    {
      if(is_array($info_item[1]))
      {
        $tmp[$info_item[0]] = $info_item[1][3];
      }
      else
      {
        $tmp[$info_item[0]] = $info_item[1];
      }
    }
    
    $info[] = $tmp;
  }
  
  set('info', $info);
  
  return render('queues.html.php');
}