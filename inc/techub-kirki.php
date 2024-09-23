<?php

new \Kirki\Panel(
	'techub_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Techub Options', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

//section 01
function techub_header_info_section(){
	new \Kirki\Section(
		'techub_header_section',
		[
			'title'       => esc_html__( 'Header Info', 'kirki' ),
			'description' => esc_html__( 'My Section Description.', 'kirki' ),
			'panel'       => 'techub_panel',
			'priority'    => 160,
		]
	);


	new \Kirki\Field\Text(
		[
			'settings' => 'address_text',
			'label'    => esc_html__( 'Addres Text', 'kirki' ),
			'section'  => 'techub_header_section',
			'default'  => esc_html__( 'Manchester 21, Zurich, CH', 'kirki' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'address_url',
			'label'    => esc_html__( 'Addres URL', 'kirki' ),
			'section'  => 'techub_header_section',
			'default'  => esc_html__( '#', 'kirki' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'email_address',
			'label'    => esc_html__( 'Email address', 'kirki' ),
			'section'  => 'techub_header_section',
			'default'  => esc_html__( 'techubinfo@mail.com', 'kirki' ),
			'priority' => 10,
		]
	);
}


function techub_header_social_section(){
	new \Kirki\Section(
		'techub_header_social',
		[
			'title'       => esc_html__( 'Header Social', 'kirki' ),
			'description' => esc_html__( 'My Header Social info.', 'kirki' ),
			'panel'       => 'techub_panel',
			'priority'    => 160,
		]
	);


	new \Kirki\Field\Text(
		[
			'settings' => 'header_facebook_url',
			'label'    => esc_html__( 'Facebook URL', 'kirki' ),
			'section'  => 'techub_header_social',
			'default'  => esc_html__( '#', 'kirki' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'header_instagram_url',
			'label'    => esc_html__( 'Instagram URL', 'kirki' ),
			'section'  => 'techub_header_social',
			'default'  => esc_html__( '#', 'kirki' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'header_twitter_url',
			'label'    => esc_html__( 'Twitter URL', 'kirki' ),
			'section'  => 'techub_header_social',
			'default'  => esc_html__( '#', 'kirki' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'header_pinterest_url',
			'label'    => esc_html__( 'Pinterest URL', 'kirki' ),
			'section'  => 'techub_header_social',
			'default'  => esc_html__( '#', 'kirki' ),
			'priority' => 10,
		]
	);
}


techub_header_info_section();
techub_header_social_section();

