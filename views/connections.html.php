<h2>Connections:</h2>
<?php if(empty($info)): ?>
<p>No Connections to Display</p>
<?php else: ?>
<table cellspacing="0" class="form">
  <thead>
    <tr>
      <th>User</th>
      <th>Peer Address</th>
      <th>Peer Port</th>
      <th>State</th>
    </tr>
  </thead>
  <?php foreach($info as $item): ?>
  <tbody>
    <tr>
      <td><?php echo $item[0][1]; ?></td>
      <td><?php echo implode('.', $item[1][1]); ?></td>
      <td><?php echo $item[2][1]; ?></td>
      <td><?php echo $item[3][1]; ?></td>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
<?php endif; ?>
