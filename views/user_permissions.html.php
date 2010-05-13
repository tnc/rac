<h2>User Permissions</h2>
<?php if(empty($info)): ?>
<p>No Permissions to Display</p>
<?php else: ?>
<table cellspacing="0" class="form">
  <thead>
    <tr>
      <th>Vhost</th>
      <th>Configure</th>
      <th>Write</th>
      <th>Read</th>
    </tr>
  </thead>
  <?php foreach($info as $item): ?>
  <tbody>
    <tr>
      <?php foreach($item as $value): ?>
      <td><?php echo $value; ?></td>
      <?php endforeach; ?>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
<?php endif; ?>
