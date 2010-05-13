<?php
function list_exchanges(){

  $exchange = new Exchange(ErlangBridge::getInstance()->getConnection());
  
  $rs = $exchange->info_all(base64_decode(params('vhost')));

  $info = array();

  foreach($rs[0] as $k=>$v)
  {
    $tmp = array();
    foreach($v as $k2=>$v2)
    {

      if(is_array($v2[1]) && count($v2[1]) > 0)
      {
        $tmp[$v2[0]] = $v2[1][count($v2[1])-1];
      }
      else
      {
        $tmp[$v2[0]] = $v2[1];
      }
    }
    $info[] = $tmp;
  }
  
  set('info', $info);
  
  return render('exchanges.html.php');
}

function list_bindings()
{
  $exchange = new Exchange(ErlangBridge::getInstance()->getConnection());
  
  $rs = $exchange->list_bindings(base64_decode(params('vhost')));

  $info = array();
  
  $info = $rs[0];
  
  set('info', $info);
  
  return render('bindings.html.php');
}