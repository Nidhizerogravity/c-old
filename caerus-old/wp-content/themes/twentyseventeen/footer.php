<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->
		<div class="right_icon"><a href="https://api.whatsapp.com/send?phone=919016202802
" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></div>
<div class="row row-no-gutters have">
	<div class="container center">
		<p>Have Any Query About Our Service? </p>
		<a href="https://zerogravitycommunications.com/website/caerus/contact-us/">Enquire Now</a>
		<div class="col-md-9">
			
		</div>
		<div class="col-md-3">
			
		</div>
	</div>
</div>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) :
					?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
									'depth'          => 1,
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
								)
							);
						?>
					</nav><!-- .social-navigation -->
					<?php
				endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<script type="text/javascript">
	 jQuery(document).ready(function(){
        jQuery("input[type='radio']").click(function(){
            var radioValue = jQuery("input[name='enquiry-for']:checked").val();
            if(radioValue == 'Exports'){
                jQuery('#export').show();
            }
            else
            {
            	jQuery('#export').hide();
            }
        });
    });
	 jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();

    if (scroll >= 1) {
        jQuery(".site-header").addClass('sticky-head');
    } else {

       jQuery(".site-header").removeClass('sticky-head');
    }
});

$(".co_items").click(function()
{
$(".com_sub_value").css("display", "inline-block");
$(".co_items").addClass("up");
$(".co_items1").removeClass("up");
$(".co_items2").removeClass("up");
$(".co_items1").addClass("down");
$(".co_items2").addClass("down");
$(".co_items").removeClass("down");
$(".com_sub_value1").css("display", "none");
$(".com_sub_value2").css("display", "none");
});
$(".co_items1").click(function()
{
$(".com_sub_value1").css("display", "inline-block");
$(".com_sub_value").css("display", "none");
$(".com_sub_value2").css("display", "none");
$(".co_items1").addClass("up");
$(".co_items").removeClass("up");
$(".co_items2").removeClass("up");
$(".co_items").addClass("down");
$(".co_items2").addClass("down");
$(".co_items1").removeClass("down");
});
$(".co_items2").click(function()
{
$(".com_sub_value2").css("display", "inline-block");
$(".com_sub_value").css("display", "none");
$(".com_sub_value1").css("display", "none");
$(".co_items2").addClass("up");
$(".co_items1").removeClass("up");
$(".co_items").removeClass("up");
$(".co_items1").addClass("down");
$(".co_items").addClass("down");
$(".co_items2").removeClass("down");
});

$(".expo_items").click(function()
{
$(".expo_sub_value").css("display", "inline-block");
$(".expo_sub_value1").css("display", "none");
$(".expo_sub_value2").css("display", "none");
});
$(".expo_items1").click(function()
{
$(".expo_sub_value1").css("display", "inline-block");
$(".expo_sub_value").css("display", "none");
$(".expo_sub_value2").css("display", "none");
});
$(".expo_items2").click(function()
{
$(".expo_sub_value2").css("display", "inline-block");
$(".expo_sub_value").css("display", "none");
$(".expo_sub_value1").css("display", "none");
});


$(".form1").click(function()
{
$(".content1").addClass("active");
$(".content2").removeClass("active");
$(".content3").removeClass("active");
$(".form1").addClass("active");
$(".form2").removeClass("active");
$(".form3").removeClass("active");
});
$(".form2").click(function()
{
$(".content1").removeClass("active");
$(".content2").addClass("active");
$(".content3").removeClass("active");
$(".form1").removeClass("active");
$(".form2").addClass("active");
$(".form3").removeClass("active");
});
$(".form3").click(function()
{
$(".content1").removeClass("active");
$(".content2").removeClass("active");
$(".content3").addClass("active");
$(".form1").removeClass("active");
$(".form2").removeClass("active");
$(".form3").addClass("active");
});
</script>
<?php wp_footer(); ?>

</body>
</html>
