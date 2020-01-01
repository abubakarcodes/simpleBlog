<?php include"includes/header.php"; ?>
<?php 






//passsing id from index and getting id in id variable
 $id = $_GET['id'];

$db = new Database;

$query = "SELECT * FROM posts WHERE id= $id";
$post = $db->select($query)->fetch(PDO::FETCH_ASSOC);


// categories query
 $query = "SELECT * FROM categories";
 $categories =  $db->select($query);

 ?>



<?php




// updating record
 if(isset($_POST['submit'])){



   $title = mysql_real_escape_string($_POST['title']);
  $body = mysql_real_escape_string($_POST['body']);
  $author = mysql_real_escape_string($_POST['author']);
  $category = mysql_real_escape_string($_POST['category']);
  $tags = mysql_real_escape_string($_POST['tags']);


  if (!isset($title) || empty($title) || !isset($body) || empty($body) || !isset($author) || empty($author) || !isset($category) || empty($category) || !isset($tags) || empty($tags) ) {
    $error = "Please fillout all required fields";
  }else{
    $query = "UPDATE posts
              SET 
              title = '$title',
              body  = '$body',
              author = '$author',
              category = '$category',
              tags   = '$tags'
              WHERE id = '$id'";
      $update_row = $db->update($query);
  }


}

  ?>

  <?php 
//deleting post
if(isset($_POST['delete'])){
  $query = "DELETE  FROM posts WHERE id=". $id;
  $delete_row = $db->delete($query);
}


   ?>


<form method="post" action="edit_post.php?id=<?php echo $id; ?>">
  <?php if(isset($error)) : ?>
<div class="form-group text-center text-uppercase" style="border:1px solid red; color:red; padding:5px; width:50%;"><?php echo $error;?></div>
<?php endif; ?>
  <div class="form-group">
    <label for="title">Post Title</label>
    <input type="text" id="title" name="title" class="form-control"  placeholder="Enter Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label for="body">Post Body</label>
    <textarea name="body" id="body" type="text" class="form-control" placeholder="Enter body Text">
      <?php echo $post['body']; ?>
    </textarea>
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
      <option <?php echo $selected; ?>  value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
    <?php endwhile; ?>
    </select>
  </div>
  <div class="form-group">
    <label for="author">Author</label>
    <input value="<?php echo $post['author']; ?>" type="text" name="author" class="form-control" id="author" placeholder="Enter Author Name">
  </div>
  <div class="form-group">
    <label for="tags">Tags</label>
    <input value="<?php echo $post['tags']; ?>" type="text" name="tags" class="form-control" id="tags" placeholder="Enter Tags">
  </div>
  <div>
 <input type="submit" class="btn btn-default" value="Submit" name="submit">
 <a href="index.php" class="btn btn-default">Cancel</a>
 <input type="submit" class="btn btn-danger" value="Delete" name="delete">
</div>
<br>
</form>
<?php include"includes/footer.php"; ?>
         