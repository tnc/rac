<?php

function init_servers_config()
{
  include_once(__DIR__ . '/../config/config.php');
  set('RABBIT_SERVERS', $RABBIT_SERVERS);
  define('RABBITMQ_HOST', $RABBIT_SERVERS[get_server_id()]['host']);
  define('RABBITMQ_COOKIE', $RABBIT_SERVERS[get_server_id()]['cookie']);
}

function get_server_id()
{
  return isset($_SESSION['server_id']) ? $_SESSION['server_id'] : 0;
}