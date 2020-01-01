<?php 
require_once"init.php";
?>


<?php 
 $obj = new Database(); 
 // post query 
 $query = "SELECT * FROM posts";
 $posts =  $obj->select($query);

//check url for category
 
 if(isset($_GET['category'])){
  $category = $_GET['category'];
  //query
  $query = "SELECT * FROM posts WHERE category = $category
            ORDER BY id DESC";
  //run query
  $posts = $obj->select($query);

}else{
  $query = "SELECT * FROM posts
             ORDER BY id DESC";
  //run query
  $posts = $obj->select($query);
}



 // categories query
 $query = "SELECT * FROM categories
          ORDER BY id DESC";
 $categories =  $obj->select($query);
 


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.png" type="image">

    <title>Welcome to PHPLoversBlog</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="index.php">Home</a>
          <a class="blog-nav-item" href="posts.php">All Posts</a>
          
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <div class="logo"><img src="images/logo.png"></div>
        <h1 class="blog-title">PHP Lover Blog</h1>
        <p class="lead blog-description">PHP News, tutorials, videos, and more</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">