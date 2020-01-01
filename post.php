<?php include"includes/header.php"; ?>


<?php 
$id = $_GET['id'];

$query = "SELECT * from posts WHERE id= $id";
$post = $obj->select($query)->fetch(PDO::FETCH_ASSOC);





 ?>
<div class="blog-post">
  <h2 class="blog-post-title"><?php echo $post['title']; ?></h2>
  <p class="blog-post-meta"><?php echo formatDate($post['date']); ?> by <a href="#"><?php echo $post['author']; ?></a></p>

  <p><?php echo $post['body']; ?></p>
</div><!-- /.blog-post -->


<?php include"includes/footer.php"; ?>