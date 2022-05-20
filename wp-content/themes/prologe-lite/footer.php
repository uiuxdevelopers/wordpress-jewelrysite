<?php
/**
 * The template for displaying the footer
 * Contains the opening of the #site-footer div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Prologe
 */
?>

<?php get_template_part( 'template-parts/sidebar', 'bottom' ); ?>

<footer id="site-footer" role="contentinfo" class="header-footer-group">

    <div class="container">

        <?php get_template_part( 'template-parts/footer-menus' ); ?>

        <div class="row">
            <div class="footer-credits col-lg-6">

                <p class="footer-copyright"><?php _e( 'Copyright', 'prologe-lite' ); ?>&nbsp;&copy;
                    <?php
							echo date_i18n(
								/* translators: Copyright date format, see https://secure.php.net/date */
								_x( 'Y', 'copyright date format', 'prologe-lite' )
							);
							?>
                   <span id="copyright-name"> <?php echo esc_html(get_theme_mod( 'prologe_lite_copyright' )); ?>.&nbsp;</span><?php _e( 'All rights reserved.', 'prologe-lite' ); ?>
                </p><!-- .footer-copyright -->

            </div><!-- .footer-credits -->

            <div class="col-lg-6">
                <a class="to-the-top" href="#site-header">
                    <span class="to-the-top-long">
                        <?php
							/* translators: %s: HTML character for up arrow */
							printf( __( 'To the top %s', 'prologe-lite' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
                    </span><!-- .to-the-top-long -->
                    <span class="to-the-top-short">
                        <?php
							/* translators: %s: HTML character for up arrow */
							printf( __( 'Up %s', 'prologe-lite' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
                    </span><!-- .to-the-top-short -->
                </a><!-- .to-the-top -->
            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</footer><!-- #site-footer -->

<?php wp_footer(); ?>



<script>
  particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 290,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "triangle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 10
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": true,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "window",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "repulse"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 100,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 100,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});

 </script>
 
</body>

</html>
