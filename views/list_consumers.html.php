<h2>Consumers:</h2>
<?php if(empty($info)): ?>
<p>No Consumers to display</p>
<?php else: ?>
<table cellspacing="0" class="form">
  <thead>
    <tr>
      <th>Queue:</th>
      <th>Consumer Tag:</th>
    </tr>
  </thead>
  <?php foreach($info as $consumer): ?>
  <tbody>
    <tr>
      <td><?php echo $consumer[0][3]; ?></td>
      <td><?php echo $consumer[2]; ?></td>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
<?php endif; ?>
