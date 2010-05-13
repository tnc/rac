<?php

function list_vhosts()
{

  $vhost = new Vhost(ErlangBridge::getInstance()->getConnection());
  $rs = $vhost->list_vhosts();
  
  set('vhosts', $rs[0]);
  
  return render('vhosts.html.php');
}

function add_vhost_form($error = '')
{
  $name = params('name');
  if(!empty($name))
  {
    die($name);
  }
  
  set_or_default('error', $error, false);
  return render('add_vhost.html.php');
}

function add_vhost()
{
  $name = $_POST['name'];
  
  if(!empty($name))
  {
    $vhost = new Vhost(ErlangBridge::getInstance()->getConnection());
    $rs = $vhost->add($name);
    header("Location: /");
  }
  else
  {
    return add_vhost_form('You must provide the vhost name');
  }
}

function delete_vhost()
{
  $name = base64_decode($_POST['name']);
  
  if(!empty($name) && $name != "/")
  {
    $vhost = new Vhost(ErlangBridge::getInstance()->getConnection());
    $vhost->delete($name);
    
    return json("OK");
  }
  else
  {
    return json("KO");
  }
}

function list_vhost_permissions()
{
  $vhost = new Vhost(ErlangBridge::getInstance()->getConnection());
  
  $rs = $vhost->list_vhost_permissions(base64_decode(params('vhost')));
  
  set('info', $rs[0]);
  
  return render('vhost_permissions.html.php');
}

function list_consumers()
{
  $queue = new Queue(ErlangBridge::getInstance()->getConnection());
  
  $rs = $queue->list_consumers(base64_decode(params('vhost')));
  
  set('info', $rs[0]);
  
  return render('list_consumers.html.php');
}