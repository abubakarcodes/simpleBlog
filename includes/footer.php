</div><!-- /.blog-main -->

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <p><?php echo $obj->about; ?></p>
  </div>
  <div class="sidebar-module">
    <h4>Archives</h4>
    <?php if($categories) : ?>
    <ol class="list-unstyled">
      <?php while($row = $categories->fetch(PDO::FETCH_ASSOC)) : ?>
      <li><a href="posts.php?category=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
      <?php endwhile; ?>
    </ol>
    <?php else : ?>
      <p>There are no categories yet.</p>
    <?php endif; ?>
  </div>
</div>
</div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">
  <p>PHPLoversBlog &copy; 2018</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>


<!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script type="text/javascript">
   $(document).ready(function() {
      var pgurl = window.location.href.substr(window.location.href
         .lastIndexOf("/") + 1);
      $(".blog-nav a.blog-nav-item").each(function() {
         if ($(this).attr("href") == pgurl || $(this).attr("href") == '')
            $(this).addClass("active");
      })
   });
   </script>
</body>
</html>