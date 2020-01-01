<?php include"includes/header.php"; ?>
<?php 
$id = $_GET['id'];

$db = new Database;

$query = "SELECT * from categories WHERE id= $id";
$category = $db->select($query)->fetch(PDO::FETCH_ASSOC);


// categories query
 $query = "SELECT * FROM categories";
 $categories =  $db->select($query);

 ?>


<?php 

//updating category
 if(isset($_POST['submit'])){



  $name = mysql_real_escape_string($_POST['name']);
  


  if (!isset($name) || empty($name) ) {
    $error = "Please fillout all required fields";
  }else{
    $query = "UPDATE categories
              SET 
              name = '$name'
              WHERE id = '$id'";
      $update_row = $db->update($query);
  }


}




  ?>


  <?php 
//deleting post
if(isset($_POST['delete'])){
  $query = "DELETE  FROM categories WHERE id=". $id;
  $delete_row = $db->delete($query);
}


   ?>



<form method="post" action="edit_category.php?id=<?php echo $id; ?>">
 <?php if(isset($error)) : ?>
<div class="form-group text-center text-uppercase" style="border:1px solid red; color:red; padding:5px; width:50%;"><?php echo $error;?></div>
<?php endif; ?>
  <div class="form-group">
    <label for="category">Category Name</label>
    <input value="<?php echo $category['name']; ?>" type="text" name="name" class="form-control" id="category" placeholder="Enter Category">
  </div>
  <div>
 <input type="submit" class="btn btn-default" value="Submit" name="submit">
 <a href="index.php" class="btn btn-default">Cancel</a>
 <input type="submit" class="btn btn-danger" value="Delete" name="delete">
  
</div>
<br>
</form>
<?php include"includes/footer.php"; ?>