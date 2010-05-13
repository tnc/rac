<h2>Vhosts:</h2>
<?php if(empty($vhosts)): ?>
<p>No vhosts to display</p>
<?php else: ?>
<table cellspacing="0" class="form">
  <tbody>
    <?php foreach($vhosts as $k=>$v): ?>
    <tr>
      <td>Name:&nbsp;&nbsp;&nbsp;<strong><?php echo $v ?></strong></td>
      <td><a href="/queues/<?php echo base64_encode($v);?>">Queues</a></td>
      <td><a href="/exchanges/<?php echo base64_encode($v);?>">Exchanges</a></td>
      <td><a href="/bindings/<?php echo base64_encode($v);?>">Bindings</a></td>
      <td><a href="/vhost_permissions/<?php echo base64_encode($v);?>">Permissions</a></td>
      <td><a href="/list_consumers/<?php echo base64_encode($v);?>">Consumers</a></td>
      <td><?php if($v == '/'): ?>
        &nbsp;
        <?php else: ?>
        <a href="#" onclick="delete_vhost('<?php echo base64_encode($v);?>', this); return false;">Delete</a>
        <?php endif; ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>
<a href="/add_vhost" class="button">Add vhosts</a>