<?php
/**
 * The template for displaying the footer.
 *
 * @package GeneratePress
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

</div><!-- #content -->
</div><!-- #page -->

<?php
/**
 * generate_before_footer hook.
 *
 * @since 0.1
 */
do_action('generate_before_footer');
?>

<footer class="site-footer" itemtype="https://schema.org/WPFooter" itemscope="">

  <div class="inner grid-container">
    <a href="https://library.queensu.ca">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/qul-logo-long.svg" width="465" height="69" alt="Queen's University Library Home"></a>
    <a href="https://queensu.ca">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/qu-logo.svg" width="200" height="152" alt="Queen's University Home">
    </a>
  </div>
</footer><!-- .site-info -->


</div>

<?php
/**
 * generate_after_footer hook.
 *
 * @since 2.1
 */
do_action('generate_after_footer');

wp_footer();
?>

</body>

</html>