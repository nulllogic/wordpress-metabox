<?php
/**
 *
 * @package     WordPress-Metabox-Fields
 * @category    Core
 * @author      Vladimir Lukyanov (@nulllogic)
 * @copyright   Copyright (c) 2019, Vladimir Lukyanov (@nulllogic)
 * @license     https://opensource.org/licenses/MIT
 * @since       1.0.0
 */


use WMF\Util\Helper;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Do not proceed if WordPress Metabox Fields Class does not exist.
if ( class_exists( 'WMF' ) ) {
	return;
}