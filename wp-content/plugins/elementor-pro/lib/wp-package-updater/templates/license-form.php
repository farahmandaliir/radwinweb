<?php if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} ?>
<div class="wrap-license" data-package_slug="<?php echo esc_attr( $package_slug ); ?>" id="<?php echo esc_attr( 'wrap_license_' . $package_id ); ?>" data-nonce="<?php echo esc_attr( wp_create_nonce( 'license_nonce' ) ); ?>">
	<p class="license-message<?php echo ( ! $show_license ) ? esc_attr( ' hidden' ) : ''; ?>" style="font-weight:bold;"><?php // @codingStandardsIgnoreLine ?>
		<span class="current-license-error hidden"></span> <span class="current-license-label"><?php esc_html_e( 'لایسنس افزونه شما فعال می باشد', 'wp-package-updater' ); ?></span> <span class="current-license"><?php echo esc_html( $license ); ?></span>
	</p>
	<p>
		<label style="vertical-align: initial;"><?php esc_html_e( 'لطفا لایسنس خود را وارد نمایید', 'wp-package-updater' ); ?></label> <input class="regular-text license" type="text" id="<?php echo esc_attr( 'license_key_' . $package_id ); ?>" value="" >
		<input type="button" value="فعال کردن لایسنس" class="button-primary activate-license" />
		<input type="button" value="غیر فعال کردن لایسنس" class="button deactivate-license" />
	</p>
</div>
