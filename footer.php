<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-grid">
            <?php dynamic_sidebar( 'footer-widgets' ); ?>
        </div>
    </div>
<button class="button-top"><i class="fa fa-angle-up"></i></button>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<ul class="sticky-social-bar">
  <li class="social-icon facebook">
    <a href="https://www.facebook.com/thomas.reeves.988"> 
      <i class="fa fa-facebook" aria-hidden="true"></i>
      <span class="social-icon-text">Facebook</span>
    </a>
  </li>
  <li class="social-icon twitter">
    <a href="#">
      <i class="fa fa-twitter" aria-hidden="true"></i>
      <span class="social-icon-text">Twitter</span>
    </a>
  </li>
  <li class="social-icon linkedin">
    <a href="#">
      <i class="fa fa-linkedin" aria-hidden="true"></i>
      <span class="social-icon-text">Linkedin</span>
    </a>
  </li>
</ul>

<?php wp_footer(); ?>
</body>
</html>