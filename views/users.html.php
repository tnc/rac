<h2>Users</h2>
<?php if(empty($info)): ?>
<p>No Users to Display</p>
<?php else: ?>
<table cellspacing="0" class="form">
  <?php foreach($info as $item): ?>
  <tbody>
    <tr>
      <td>Name:&nbsp;&nbsp;<strong><?php echo $item; ?></strong></td>
      <td><a href="/user_permissions/<?php echo base64_encode($item); ?>">permissions</a></td>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
<?php endif; ?>
