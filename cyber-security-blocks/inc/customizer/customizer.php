<?php
/**
 * Cyber Security Blocks: Customizer
 *
 * @subpackage Cyber Security Blocks
 * @since 1.0
 */

function cyber_security_blocks_customize_register( $wp_customize ) {

    wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

    // Pro Section
    $wp_customize->add_section('cyber_security_blocks_pro', array(
        'title'    => __('CYBER SECURITY PREMIUM', 'cyber-security-blocks'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('cyber_security_blocks_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Cyber_Security_Blocks_Pro_Control($wp_customize, 'cyber_security_blocks_pro', array(
        'label'    => __('CYBER SECURITY PREMIUM', 'cyber-security-blocks'),
        'section'  => 'cyber_security_blocks_pro',
        'settings' => 'cyber_security_blocks_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'cyber_security_blocks_customize_register' );


define('CYBER_SECURITY_BLOCKS_PRO_LINK',__('https://www.ovationthemes.com/products/wordpress-cyber-security-theme','cyber-security-blocks'));

define('CYBER_SECURITY_BLOCKS_BUNDLE_BTN',__('https://www.ovationthemes.com/products/wordpress-bundle','cyber-security-blocks'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Cyber_Security_Blocks_Pro_Control')):
    class Cyber_Security_Blocks_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
            <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( CYBER_SECURITY_BLOCKS_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE CYBER SECURITY PREMIUM','cyber-security-blocks');?> </a>
            </div>
            <div class="col-md">
                <img class="cyber_security_blocks_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
            <div class="col-md">
                <ul style="padding-top:10px">
                    <li class="upsell-cyber_security_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'cyber-security-blocks');?> </li>                 
                    <li class="upsell-cyber_security_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'cyber-security-blocks');?> </li>
                    <li class="upsell-cyber_security_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'cyber-security-blocks');?> </li>
                    <li class="upsell-cyber_security_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'cyber-security-blocks');?> </li>
                    <li class="upsell-cyber_security_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'cyber-security-blocks');?> </li>
                    <li class="upsell-cyber_security_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'cyber-security-blocks');?> </li>
                    <li class="upsell-cyber_security_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'cyber-security-blocks');?> </li>
                    <li class="upsell-cyber_security_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'cyber-security-blocks');?> </li>
                    <li class="upsell-cyber_security_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'cyber-security-blocks');?> </li>
                    <li class="upsell-cyber_security_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'cyber-security-blocks');?> </li>
                    <li class="upsell-cyber_security_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'cyber-security-blocks');?> </li>
                    <li class="upsell-cyber_security_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'cyber-security-blocks');?> </li>
                    <li class="upsell-cyber_security_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'cyber-security-blocks');?> </li>
                    <li class="upsell-cyber_security_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'cyber-security-blocks');?> </li>
                </ul>
            </div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( CYBER_SECURITY_BLOCKS_BUNDLE_BTN ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('Wordpress Theme Bundle (100+ Themes at Just $89)','cyber-security-blocks');?> </a>
            </div>
        </label>
    <?php } }
endif;