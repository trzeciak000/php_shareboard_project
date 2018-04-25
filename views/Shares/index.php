<div>
  <?php if(isset($_SESSION['is_logged_in'])) : ?>
  <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share</a>
  <?php else : ?>
  <h3><a href="<?php echo ROOT_PATH; ?>users/login">Log in</a> to share something</h3>
  <?php endif; ?>
  <br />
  <?php foreach($viewmodel as $item) : ?>
    <div class="well">
        <h3><?php echo $item['title'].'<br />'; ?></h3>
        <small><?php echo $item['create_date']; ?></small>
        <br />
        <p><?php echo $item['body']; ?></p>
        <br />
        <a class="btn btn-outline-primary" href="<?php echo $item['link']; ?>" target="_blank">Go to Website</a>
        <br /><br />
    </div>
  <?php endforeach; ?>
</div>
