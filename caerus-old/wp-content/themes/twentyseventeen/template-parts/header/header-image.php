<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">
		<div class="container">
			<div class="row sec_middle">
				<div class="col-md-2 col-sm-2 col-lg-2 col-xs-8 header-logo">
					<a href="https://zerogravitycommunications.com/website/caerus/cargo/">
					<?php the_custom_logo(); ?>
					</a>
				</div>
				<div class="col-md-10 col-sm-10 col-lg-10 col-xs-4 header-menu">
					<?php if ( has_nav_menu( 'top' ) ) : ?>
						
								<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
							
					<?php endif; ?>
				</div>
			</div>
			
		</div>

</div><!-- .custom-header -->
