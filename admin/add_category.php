<?php include"includes/header.php"; ?>
<?php $db = new Database; ?>



<?php

//adding category 
 if(isset($_POST['submit'])){



  $name = mysql_real_escape_string($_POST['name']);
  


  if (!isset($name) || empty($name) ) {
    $error = "Please fillout all required fields";
  }else{
    $query = "INSERT INTO categories (name)
              VALUES ('$name')";
      $insert_row = $db->insert($query);
  }


}




  ?>

<form method="post" action="add_category.php">
	<?php if(isset($error)) : ?>
<div class="form-group text-center text-uppercase" style="border:1px solid red; color:red; padding:5px; width:50%;"><?php echo $error;?></div>
<?php endif; ?>
  <div class="form-group">
    <label for="category">Category Name</label>
    <input type="text" name="name" class="form-control" id="category" placeholder="Enter Category">
  </div>
  <div>
 <input type="submit" class="btn btn-default" value="Submit" name="submit">
  <a href="index.php" class="btn btn-default">Cancel</a>
</div>
<br>
</form>
<?php include"includes/footer.php"; ?>