<?php

$cfg = array();

$cfg['sidebar_positions'] = array(
	'full'  => array(
		'icon_url'        => 'full.png',
		'sidebars_number' => 0
	),
	'left'  => array(
		'icon_url'        => 'left.png',
		'sidebars_number' => 1
	),
	'right' => array(
		'icon_url'        => 'right.png',
		'sidebars_number' => 1
	),
	/*'left_right' => array(
		'icon_url' => 'left_right.png',
		'sidebars_number' => 2
	),*/
);

$cfg['dynamic_sidebar_args'] = array(
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h2 class="widget-title"><span>',
	'after_title'   => '</span></h2>',
);
