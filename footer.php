<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Udemy_Bootstrap
 */

?>

<?php wp_footer(); ?>

<!-- JQUERY -->
<script src="<?php bloginfo("template_directory"); ?>/node_modules/jquery/dist/jquery.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="<?php bloginfo("template_directory"); ?>/assets/js/main.js"></script>

</body>
</html>
