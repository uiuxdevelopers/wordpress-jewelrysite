<?php
/**
 * Displays the menus and widgets at the end of the main element.
 * Visually, this output is presented as part of the footer element.
 * @package Prologe
 */

$has_footer_menu = has_nav_menu( 'footer' );
$has_social_menu = has_nav_menu( 'social' );

// Only output the container if there are elements to display.
if ( $has_footer_menu || $has_social_menu ) {
	?>

<div class="footer-inner">

    <?php

			$footer_top_classes = '';

			$footer_top_classes .= $has_footer_menu ? ' has-footer-menu' : '';
			$footer_top_classes .= $has_social_menu ? ' has-social-menu' : '';

			if ( $has_footer_menu || $has_social_menu ) {
				?>
    <div class="footer-top<?php echo $footer_top_classes; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">

        <?php if ( $has_social_menu ) { ?>
        <div class="row">
            <nav aria-label="<?php esc_attr_e( 'Social links', 'prologe-lite' ); ?>" class="footer-social-wrapper col-lg-12">

                <ul class="social-menu footer-social reset-list-style social-icons fill-children-current-color">

                    <?php
								wp_nav_menu(
									array(
										'theme_location'  => 'social',
										'container'       => '',
										'container_class' => '',
										'items_wrap'      => '%3$s',
										'menu_id'         => '',
										'menu_class'      => '',
										'depth'           => 1,
										'link_before'     => '<span class="screen-reader-text">',
										'link_after'      => '</span>',
										'fallback_cb'     => '',
									)
								);
								?>

                </ul><!-- .footer-social -->

            </nav><!-- .footer-social-wrapper -->
        </div>
        <?php } ?>

        <?php if ( $has_footer_menu ) { ?>

        <div class="row">
            <nav aria-label="<?php esc_attr_e( 'Footer', 'prologe-lite' ); ?>" role="navigation" class="footer-menu-wrapper  col-lg-12">

                <ul class="footer-menu reset-list-style">
                    <?php
								wp_nav_menu(
									array(
										'container'      => '',
										'depth'          => 1,
										'items_wrap'     => '%3$s',
										'theme_location' => 'footer',
									)
								);
								?>
                </ul>

            </nav><!-- .site-nav -->
        </div>
        <?php } ?>

    </div><!-- .footer-top -->

    <?php } ?>

</div><!-- .footer-inner -->

<?php } ?>
