<?php
/*
Plugin Name: BitLab
Description: BitLab Dashboard
Version: 1.0
Author: Chavindu Nuwanpriya
*/

// Add a top-level menu for BitLab in the admin dashboard
function bitlab_add_menu() {
    add_menu_page(
        'BitLab',
        'BitLab',
        'manage_options',
        'bitlab',
        'bitlab_render_menu',
        'dashicons-admin-plugins',
        80
    );
}

add_action('admin_menu', 'bitlab_add_menu');

// Render BitLab menu
function bitlab_render_menu() {
    ?>
    <div class="wrap">
        <h1>BitLab Dashboard</h1>
        <p>Welcome to the BitLab Dashboard. Explore the available options.</p>

        <h2>Installed Plugins by Chavindu Nuwanpriya</h2>
        <ul>
            <li>
                <a href="<?php echo admin_url('admin.php?page=floating_button_settings'); ?>" style="text-decoration: none; display: inline-block; padding: 8px 12px; border: 1px solid #ddd; border-radius: 4px;">
                    <i class="fas fa-cogs" style="margin-right: 5px;"></i>
                    Floating Button for VANNi (Version 1.2)
                </a>
            </li>
            <!-- Add other plugins here with their respective settings page slugs -->
        </ul>
    </div>
    <?php
}

// Activation hook
function bitlab_activate() {
    // Add any activation code here if needed
}

register_activation_hook(__FILE__, 'bitlab_activate');
