<?php include"includes/header.php"; ?>

<?php 
$db = new Database;

// create a query for extracting data from post table
$query = "SELECT posts.* , categories.name FROM posts 
          INNER JOIN categories 
          ON posts.category = categories.id
          ORDER BY posts.id DESC";
 $posts = $db->select($query);


// categories query
 $query = "SELECT * FROM categories
          ORDER BY id DESC";
 $categories =  $db->select($query);


 ?>
 <table class="table table-condensed">
  <tr>
    <th>POST_ID#</th> 
    <th>Category</th> 
    <th>Title</th> 
    <th>Author</th> 
    <th>Date</th> 
  </tr>
  <?php while ($row = $posts->fetch(PDO::FETCH_ASSOC) ) : ?>
  <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
     <td><a href="edit_post.php?id=<?php echo $row['id']; ?>" ><?php echo $row['title']; ?></a></td>
       <td><?php echo $row['author']; ?></td>
        <td><?php echo formatDate($row['date']); ?></td>
  </tr>
    <?php endwhile; ?>
</table>

<table class="table table-condensed">
  <tr>
    <th>Category_ID#</th> 
    <th>Category_Name</th> 
  </tr>
  <?php while( $row = $categories->fetch(PDO::FETCH_ASSOC) ) : ?>
  <tr>
    <td><?php echo $row['id']; ?></td>
     <td><a href="edit_category.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td>
     
  </tr>
    <?php endwhile; ?>
</table>
<?php include"includes/footer.php"; ?>
         