 </div><!-- /.blog-main -->

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
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script src="../js/bootstrap.js"></script>
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