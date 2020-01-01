<?php include"includes/header.php"; ?>

<?php if($posts) : ?>
  <?php while( $row = $posts->fetch(PDO::FETCH_ASSOC) ) : ?>
<div class="blog-post">
  
  <h2 class="blog-post-title"><?php echo $row['title'];?></h2>
  <p class="blog-post-meta"><?php echo formatDate($row['date']); ?> by <a href="#"><?php echo $row['author']; ?></a></p>

  <p><?php echo shortenText($row['body']); ?></p>
  <a href="post.php?id=<?php echo $row['id']; ?>" class="readmore">Read More</a>
</div><!-- /.blog-post -->
<?php endwhile; ?>
<?php  else :  ?>
  <p>There are no posts yet</p>
<?php endif; ?>

<?php include"includes/footer.php"; ?>