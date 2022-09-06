<?php

add_action( 'init' , 'medical_business_services' );
function medical_business_services(){

	Kirki::add_section( 'medical_business_services', array(
        'title'   => esc_html__( 'Services', 'medical-business' ),
        'section' => 'homepage'
    ) );

    Kirki::add_field( 'bizberg', [
		'type'        => 'checkbox',
		'settings'    => 'services_status',
		'label'       => esc_html__( 'Enable / Disable', 'medical-business' ),
		'section'     => 'medical_business_services',
		'default'     => false,
	] );

    Kirki::add_field( 'bizberg', [
		'type'     => 'text',
		'settings' => 'services_subtitle',
		'label'    => esc_html__( 'Subtitle', 'medical-business' ),
		'section'  => 'medical_business_services',
		'default'  => esc_html__( 'THE BEST PROFESSIONAL TEAM', 'medical-business' ),
		'active_callback' => [
			[
				'setting'  => 'services_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', [
		'type'     => 'text',
		'settings' => 'services_title',
		'label'    => esc_html__( 'Title', 'medical-business' ),
		'section'  => 'medical_business_services',
		'default'  => esc_html__( 'Here to make you realize your innovative projects', 'medical-business' ),
		'active_callback' => [
			[
				'setting'  => 'services_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', array(
    	'type'        => 'advanced-repeater',
    	'label'       => esc_html__( 'Services', 'medical-business' ),
	    'section'     => 'medical_business_services',
	    'settings'    => 'medical_business_services',
	    'active_callback' => [
			[
				'setting'  => 'services_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	    'choices' => [
	        'button_label' => esc_html__( 'Add Services', 'medical-business' ),
	        'row_label' => [
	            'value' => esc_html__( 'Services', 'medical-business' ),
	        ],
	        'limit'  => 4,
	        'fields' => [
	        	'icon'  => [
	                'type'        => 'fontawesome',
	                'label'       => esc_html__( 'Icon', 'medical-business' ),
	                'default'     => 'fab fa-accusoft',
	                'choices'     => bizberg_get_fontawesome_options(),
	            ],
	            'page_id' => [
	                'type'        => 'select',
	                'label'       => esc_html__( 'Page', 'medical-business' ),
	                'choices'     => bizberg_get_all_pages()
	            ],
	        ],
	    ]
    ));

}