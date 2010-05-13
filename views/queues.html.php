<h2>Queues:</h2>
<?php if(empty($info)): ?>
  <p>No Queues to display</p>
<?php else: ?>
  <table cellspacing="0" class="form">
    <thead>
    <tr>
      <th>Name:</th>
      <th>Messages:</th>
      <th>Consumers:</th>
      <th>Durable:</th>
      <th>Auto Delete:</th>
      <th>Memory:</th>
    </tr>
    </thead>
    <?php foreach($info as $queue): ?>
    <tbody>
    <tr>
      <td><?php echo $queue['name']; ?></td>
      <td><?php echo $queue['messages']; ?></td>
      <td><?php echo $queue['consumers']; ?></td>
      <td><?php echo $queue['durable']; ?></td>
      <td><?php echo $queue['auto_delete']; ?></td>
      <td><?php echo $queue['memory']; ?></td>
    </tr>
    </tbody>
    <?php endforeach; ?>
  </table>
<?php endif; ?>