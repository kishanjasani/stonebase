<?php
/**
 * Title: Footer
 * Slug: stonebase/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with logo, title, copyright text and social links.
 *
 * @package KishanJasani
 * @subpackage Stonebase
 * @since Stonebase 1.0
 */

?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}, "blockGap":"var:preset|spacing|large"}},"backgroundColor":"contrast","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide has-contrast-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
		<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"blockGap":"var:preset|spacing|large"}},"textColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group has-base-color has-text-color has-link-color">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:site-logo {"width":56,"shouldSyncIcon":true,"style":{"color":{"duotone":"unset"}}} /-->

					<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}}} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph -->
					<p>&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>. All rights reserved.</p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
					<div class="wp-block-group has-contrast-3-color has-text-color has-link-color">
						<!-- wp:paragraph -->
						<p><a href="/privacy-policy">Privacy Policy</a></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph -->
						<p>/</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph -->
						<p><a href="/cookie-policy">Cookie Policy</a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:social-links {"iconColor":"base","iconColorValue":"#FFFFFF","size":"has-small-icon-size","className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"https://instagram.com/your-handle","service":"instagram"} /-->

				<!-- wp:social-link {"url":"https://github.com/your-handle","service":"github"} /-->

				<!-- wp:social-link {"url":"https://profiles.wordpress.org/kishanjasani/","service":"wordpress"} /-->

				<!-- wp:social-link {"url":"https://linkedin.com/in/your-handle","service":"linkedin"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"contrast-2","textColor":"base-4","style":{"typography":{"fontSize":"13px"},"border":{"radius":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|base-4"}}}}} -->
			<div class="wp-block-button has-custom-font-size" style="font-size:13px">
				<a class="wp-block-button__link has-base-4-color has-contrast-2-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:20px">Powered by Stonebase</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
