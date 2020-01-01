<?php include"includes/header.php"; ?>


<?php 

$db = new Database;
// categories query
 $query = "SELECT * FROM categories";
 $categories =  $db->select($query);


 ?>

 <?php 
// adding record

 if(isset($_POST['submit'])){

  $title = mysql_real_escape_string($_POST['title']);
  $body = mysql_real_escape_string($_POST['body']);
  $author = mysql_real_escape_string($_POST['author']);
  $category = mysql_real_escape_string($_POST['category']);
  $tags = mysql_real_escape_string($_POST['tags']);


  if (!isset($title) || empty($title) || !isset($body) || empty($body) || !isset($author) || empty($author) || !isset($category) || empty($category) || !isset($tags) || empty($tags) ) {
    $error = "Please fillout all required fields";
  }else{
    $query = "INSERT INTO posts (title, category, body, author, tags )
              VALUES ('$title', '$category' , '$body' , '$author', '$tags')";
      $insert_row = $db->insert($query);
  }


}




  ?>


<form method="post" action="add_post.php">
  <?php if(isset($error)) : ?>
<div class="form-group text-center text-uppercase" style="border:1px solid red; color:red; padding:5px; width:50%;"><?php echo $error;?></div>
<?php endif; ?>
  <div class="form-group">
    <label for="title">Post Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="body">Post Body</label>
    <textarea name="body" id="body" type="text" class="form-control" placeholder="Enter body Text"></textarea>
  </div>
  <div class="form-group">
    <label for="category">Category</label>
     <select class="form-control" name="category" id="category">
      <?php while( $row = $categories->fetch(PDO::FETCH_ASSOC) ) : ?>
        <?php if ($row['id'] == $post['category']) {
          $selected = 'selected';
        }else{
          $selected = '';
        }

         ?>
      <option <?php echo $selected; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
    <?php endwhile; ?>
    </select>
  </div>
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" name="author" class="form-control" id="author" placeholder="Enter Author Name">
  </div>
  <div class="form-group">
    <label for="tags">Tags</label>
    <input type="text" name="tags" class="form-control" id="tags" placeholder="Enter Tags">
  </div>
  <div>
  <input type="submit" class="btn btn-default" value="Submit" name="submit">
  <a href="index.php" class="btn btn-default">Cancel</a>
</div>
<br>
</form>
<?php include"includes/footer.php"; ?>
         