<?php 

function cyber_security_blocks_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'cyber-security-blocks-theme-settings', // Menu slug
        'cyber_security_blocks_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'cyber_security_blocks_add_admin_menu' );

function cyber_security_blocks_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'cyber-security-blocks' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'cyber_security_blocks_settings_group' );
            do_settings_sections( 'cyber-security-blocks-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function cyber_security_blocks_register_settings() {
    register_setting( 'cyber_security_blocks_settings_group', 'cyber_security_blocks_enable_animations' );

    add_settings_section(
        'cyber_security_blocks_settings_section',
        __( 'Animation Settings', 'cyber-security-blocks' ),
        null,
        'cyber-security-blocks-theme-settings'
    );

    add_settings_field(
        'cyber_security_blocks_enable_animations',
        __( 'Enable Animations', 'cyber-security-blocks' ),
        'cyber_security_blocks_enable_animations_callback',
        'cyber-security-blocks-theme-settings',
        'cyber_security_blocks_settings_section'
    );
}
add_action( 'admin_init', 'cyber_security_blocks_register_settings' );

function cyber_security_blocks_enable_animations_callback() {
    $checked = get_option( 'cyber_security_blocks_enable_animations', true );
    ?>
    <input type="checkbox" name="cyber_security_blocks_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

