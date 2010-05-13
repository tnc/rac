<?php

function list_users()
{
  $user = new User(ErlangBridge::getInstance()->getConnection());
  
  $rs = $user->list_users();
  
  set('info', $rs[0]);
  
  return render('users.html.php');
}

function user_permissions()
{
  $user = new User(ErlangBridge::getInstance()->getConnection());
  
  $rs = $user->list_user_permissions(base64_decode(params('user')));
  
  set('info', $rs[0]);
  
  return render('user_permissions.html.php');
}

?>