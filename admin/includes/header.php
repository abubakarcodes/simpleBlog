<?php 
require_once"../init.php";
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
    <link rel="icon" href="../images/logo.png" type="image">

    <title>Admin Area</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="index.php">Dashboard</a>
          <a class="blog-nav-item" href="add_post.php">Add Post</a>
          <a class="blog-nav-item" href="add_category.php">Add Category</a>
          <a class="blog-nav-item pull-right" href="http://localhost/10projects/phploverblog/index.php">Visit Blog</a>
          
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">Admin Area</h1>
      </div>
      <div class="row">
        <div class="col-sm-12">
           <?php if(isset($_GET['msg'])): ?>
          <h2 class="text-uppercase text-center" style="border:1px solid green; color:green; padding:5px; width:35%;"><?php echo $_GET['msg']; ?></h2>
        <?php endif; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 blog-main">