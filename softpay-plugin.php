<?php
/**
 * Plugin Name: SoftPay PG
 * Description: Integrates SoftPay payment solutions with WooCommerce.
 * Version: 1.0
 * Author: SoftPay SAS
 */

if (!defined('ABSPATH')) exit;

require_once plugin_dir_path(__FILE__) . 'includes/database/create-tables.php';
require_once plugin_dir_path(__FILE__) . 'includes/admin/settings-page.php';
require_once plugin_dir_path(__FILE__) . 'includes/frontend/enqueue-scripts.php';
require_once plugin_dir_path(__FILE__) . 'includes/woocommerce/payment-gateway.php';
require_once plugin_dir_path(__FILE__) . 'includes/donation/wp-give.php';

register_activation_hook(__FILE__, 'softpay_create_database_tables');
