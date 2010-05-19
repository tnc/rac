<?php

require_once(__DIR__ . '/../lib/vendor/limonade/lib/limonade.php');
require_once(__DIR__ . '/../lib/helpers.php');

function configure()
{
  init_servers_config();
  
  option('env', ENV_DEVELOPMENT);
  option('limonade_dir', __DIR__ . '/../lib/vendor/limonade/lib');
  option('lib_dir', __DIR__ . '/../lib');
  option('controllers_dir', __DIR__ .'/../controllers');
  option('views_dir', __DIR__ .'/../views');
}

function before($route)
{
  layout('layout.html.php');
}

dispatch_post('/switch_server', 'switch_server');

dispatch('/', 'list_vhosts');
dispatch('/vhost_permissions/:vhost', 'list_vhost_permissions');
dispatch('/add_vhost', 'add_vhost_form');
dispatch_post('/add_vhost', 'add_vhost');
dispatch_post('/delete_vhost', 'delete_vhost');
dispatch('/list_consumers/:vhost', 'list_consumers');

dispatch('/exchanges/:vhost', 'list_exchanges');

dispatch('/queues/:vhost', 'list_queues');

dispatch('/bindings/:vhost', 'list_bindings');

dispatch('/list_connections', 'list_connections');

dispatch('/list_channels', 'list_channels');

dispatch('/list_users', 'list_users');
dispatch('/user_permissions/:user', 'user_permissions');

run();

?>