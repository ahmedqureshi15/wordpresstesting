<?php
namespace ElementorPro\Core\Upgrade;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Manager extends \Elementor\Core\Upgrade\Manager {

	public function get_action() {
		return 'elementor_pro_updater';
	}

	public function get_plugin_name() {
		return 'elementor-pro';
	}

	public function get_plugin_label() {
		return __( 'Elementor Pro', 'elementor-pro' );
	}

	public function get_new_version() {
		return ELEMENTOR_PRO_VERSION;
	}

	public function get_version_option_name() {
		return 'elementor_pro_version';
	}

	public function get_upgrades_class() {
		return 'ElementorPro\Core\Upgrade\Upgrades';
	}
}
