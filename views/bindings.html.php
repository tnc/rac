<h2>Bindings:</h2>
<?php if(empty($info)): ?>
  <p>No Bindings to display</p>
<?php else: ?>
<table cellspacing="0" class="form">
    <thead>
    <tr>
      <th>Exchange</th>
      <th>Queue</th>
      <th>Routing Key</th>
    </tr>
    </thead>
  <?php foreach($info as $binding): ?>
    <tbody>
    <tr>
      <td><?php echo $binding[0][3]; ?></td>
      <td><?php echo $binding[1][3]; ?></td>
      <td><?php echo $binding[2]; ?></td>
    </tr>
    </tbody>
  <?php endforeach; ?>
  </table>
<?php endif; ?>