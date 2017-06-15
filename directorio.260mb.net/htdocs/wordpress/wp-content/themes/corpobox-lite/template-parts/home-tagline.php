<?php
/**
 * @package Corpobox
 */
?>

<!-- Home Tagline -->
<section id="tagline">

<div id="home-tagline" style="background: <?php echo esc_attr( get_theme_mod( 'home_tagline_bgcolor', '#e8e09d' ) ); ?> url(<?php echo esc_attr( get_theme_mod( 'home_tagline_bgimg', get_template_directory_uri().'/img/tagline.jpg' ) ); ?>); background-position: 50%; background-size:cover;">

<?php
$placement = get_theme_mod( 'home_tagline', '<h1>Home Tagline</h1>' );
if (!empty($placement)) : ?>
	<div class="tagline-txt">
		<?php echo do_shortcode( wp_kses_post( get_theme_mod( 'home_tagline', '<h1>Home Tagline</h1>' ) ) ); ?>
	</div>
<?php endif; ?>

</div>

</section>
<!--#home-tagline-->