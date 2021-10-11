<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php
        wp_nav_menu([
          'theme_location'  => 'upper-footer',
          'container'       => 'null',
          'menu_class'      => 'social-icons',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        ]);

        ?>
      </div>
      <div class="col-lg-12">
      <div class="copyright-text">
      <?php
        wp_nav_menu([
          'theme_location'  => 'lower-footer',
          'container'       => 'null',
          'menu_class'      => 'social-icons',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'items_wrap'      => '<p>%3$s</p>',
        ]);
        ?>
</div>
      </div>
    </div>
  </div>
</footer>

<script language="text/Javascript">
  cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
  function clearField(t) { //declaring the array outside of the
    if (!cleared[t.id]) { // function makes it static and global
      cleared[t.id] = 1; // you could use true and false, but that's more typing
      t.value = ''; // with more chance of typos
      t.style.color = '#fff';
    }
  }
</script>

<?php wp_footer(); ?>
</body>

</html>