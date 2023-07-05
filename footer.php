<footer>
  <div id="footer_container">
    <div id="footer">
      <?php wp_nav_menu( array('menu' => 'menu-footer', 'theme_location' => 'menu-footer', 'container_class' => 'menu'  ) ); ?>
      <div id=""><a href="#top" title="Zum Seitenanfang springen">nach oben</a></div>
      <div id="">&copy; MeinTemplate <?php echo date("Y"); ?> &ndash; Designed by Tammam and Kataryna</a></div>
      <!--<?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds -->
    </div><!--close footer-->
  </div><!--close footer_container-->
</footer>

</header>
<?php wp_footer(); ?>
</body>
</html>

