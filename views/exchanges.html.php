<h2>Exchanges:</h2>
<?php if(empty($info)): ?>
<p>No Exchanges to display</p>
<?php else: ?>
<table cellspacing="0" class="form">
  <thead>
  <tr>
    <th>Name:</th>
    <th>Type:</th>
    <th>Durable:</th>
    <th>Auto Delete:</th>
  </tr>
  </thead>
  <?php foreach($info as $exchange): ?>
  <tbody>
  <tr>
    <td><?php echo $exchange['name']; ?></td>
    <td><?php echo $exchange['type']; ?></td>
    <td><?php echo $exchange['durable']; ?></td>
    <td><?php echo $exchange['auto_delete']; ?></td>
  </tr>
  </tbody>
  <?php endforeach; ?>
</table>
<?php endif; ?>