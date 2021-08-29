<footer class="site-footer">
      <?php
            $args = array( 
               'theme_location' => 'header-menu',
               'container' => 'nav',
               'container_class' => 'footer-nav',
               'after' => '<span class="separador">  |  </span>'
             );
            wp_nav_menu($args);
       ?>
<div class="direccion">
      <p>8617 Bay Avenue Montain View, CA 94043</p>
      <p>Teléfono: 04128053909</p>
</div>
</footer>

   <?php wp_footer(); ?>
</body>
</html>