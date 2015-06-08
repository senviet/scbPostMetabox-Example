<?php
/*
Plugin Name: Metabox Sample
Plugin URI: http://laptrinh.senviet.org
Description: Plugin đơn giản để ví dụ cách tạo metabox bằng scbFramework
Version: 1.0
Author: nguyenvanduocit
Author URI: http://nvduoc.senviet.org
License: A "Slug" license name e.g. GPL2
*/
require __DIR__ . '/inc/lib/load.php';
function metabox_sample_init() {
	require __DIR__ . '/inc/Sample_Metabox.php';
	$metabox = new Sample_Metabox();
}
scb_init( 'metabox_sample_init' );