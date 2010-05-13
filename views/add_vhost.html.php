<?php if(!empty($error)): ?>

<p><?php echo $error; ?></p>
<?php endif; ?>
<form action="/add_vhost" method="post" accept-charset="utf-8">
  <p>
    <input type="text" name="name">
    </input>
    <input type="submit" value="Add">
  </p>
</form>
