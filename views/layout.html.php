<?php extract($vars); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RabbitMQ Admin Console</title>
<script type="text/javascript" charset="utf-8" src="/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" charset="utf-8">
      function delete_vhost(vhost, vhostEl){
        $.ajax({  
          type: "POST",  
          url: "/delete_vhost",
          data: {name: vhost},
          success: function(data) {
            if(data == 'OK') {
              alert('Vhost ' + vhost + 'Deleted');
              $(vhostEl).parent().parent().remove();
            } else {
              alert('Vhost ' + vhost + "Cant't be Deleted");
            }
          }
        });
      }
  </script>
<link rel="stylesheet" type="text/css" media="screen" href="/style/style.css" />
</head>
<body>
<div id="page">
  <h1 id="top"><a href="/"><img src="/img/rabbitmqlogonostrap.png" /></a><a href="/">Administration Console</a></h1>
  <ul id="menu">
    <li><a href="/">Vhosts</a></li>
    <li><a href="/list_users">Users</a></li>
    <li><a href="/list_connections">Connections</a></li>
    <li><a href="/list_channels">Channels</a></li>
  </ul>
  <div id="content">
		<?php echo $content; ?>
  </div>
  <div class="clear">
    <!---->
  </div>
</div>
</body>
</html>
