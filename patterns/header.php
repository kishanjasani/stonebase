<?php
/**
 * Title: Header
 * Slug: stonebase/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with logo, site title and navigation.
 *
 * @package KishanJasani
 * @subpackage Stonebase
 * @since Stonebase 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","fontSize":"x-small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide has-base-color has-contrast-background-color has-text-color has-background has-link-color has-x-small-font-size" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" aria-label="Site branding">
			<!-- wp:site-logo {"width":42,"align":"center"} /-->

			<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical","justifyContent":"left"}} -->
			<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0">
				<!-- wp:site-title {"style":{"typography":{"fontSize":"20px"}},"textAlign":"left"} /-->

				<!-- wp:site-tagline {"style":{"typography":{"fontSize":"14px"},"color":{"text":"var:preset|color|neutral-700"}},"textAlign":"left"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"overlayBackgroundColor":"base","overlayTextColor":"contrast","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap"},"ariaLabel":"Primary Navigation"} /-->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/join-now' ) ); ?>">Join Now</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
