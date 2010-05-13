<h2>Channels:</h2>
<?php if(empty($info)): ?>
<p>No Channels to Display</p>
<?php else: ?>
<table cellspacing="0" class="form">
  <thead>
    <tr>
      <th>User</th>
      <th>Transactional</th>
      <th>Consumer Count</th>
      <th>Msgs Unacked</th>
    </tr>
  </thead>
  <?php foreach($info as $item): ?>
  <tbody>
    <tr>
      <td><?php echo $item[1][1]; ?></td>
      <td><?php echo $item[2][1]; ?></td>
      <td><?php echo $item[3][1]; ?></td>
      <td><?php echo $item[4][1]; ?></td>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
<?php endif;?>
