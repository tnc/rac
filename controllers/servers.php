<?php

function switch_server()
{
  $server = isset($_POST['server_id']) ? (int) $_POST['server_id'] : 0;
  $_SESSION['server_id'] = $server;
  header("Location: " . $_SERVER['HTTP_REFERER']);
}