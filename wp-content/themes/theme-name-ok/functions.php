<?php
Kirki::add_config( 'kirki_demo', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );


	Kirki::add_section( 'test', array(
		'title'      => 'Kirki test section',
		'capability' => 'edit_theme_options',
    ) );
    
    Kirki::add_field( 'theme_config_id', [
	'type'        => 'background',
	'settings'    => 'background_setting',
	'label'       => esc_html__( 'Background Control', 'kirki' ),
	'description' => esc_html__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'kirki' ),
	'section'     => 'test',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'body',
		],
	],
] );