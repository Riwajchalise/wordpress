<?php

add_action( 'init' , 'medical_business_expertise' );
function medical_business_expertise(){

	Kirki::add_section( 'medical_business_expertise_sections', array(
        'title'   => esc_html__( 'Expertise', 'medical-business' ),
        'section' => 'homepage'
    ) );

    Kirki::add_field( 'bizberg', [
		'type'        => 'checkbox',
		'settings'    => 'expertise_status',
		'label'       => esc_html__( 'Enable / Disable', 'medical-business' ),
		'section'     => 'medical_business_expertise_sections',
		'default'     => false,
	] );

	Kirki::add_field( 'bizberg', [
		'type'     => 'text',
		'settings' => 'expertise_subtitle',
		'label'    => esc_html__( 'Subtitle', 'medical-business' ),
		'section'  => 'medical_business_expertise_sections',
		'default'  => esc_html__( 'DOMAIN OF EXPERTISE', 'medical-business' ),
		'active_callback' => [
			[
				'setting'  => 'expertise_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', [
		'type'     => 'text',
		'settings' => 'expertise_title',
		'label'    => esc_html__( 'Title', 'medical-business' ),
		'section'  => 'medical_business_expertise_sections',
		'default'  => esc_html__( 'Our mentors are experts in different fields.', 'medical-business' ),
		'active_callback' => [
			[
				'setting'  => 'expertise_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

    Kirki::add_field( 'bizberg', array(
    	'type'        => 'advanced-repeater',
    	'label'       => esc_html__( 'Expertise', 'medical-business' ),
	    'section'     => 'medical_business_expertise_sections',
	    'settings'    => 'medical_business_expertise_sections',
	    'active_callback' => [
			[
				'setting'  => 'expertise_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	    'choices' => [
	        'button_label' => esc_html__( 'Add Expertise', 'medical-business' ),
	        'row_label' => [
	            'value' => esc_html__( 'Expertise', 'medical-business' ),
	        ],
	        'fields' => [
	            'page_id' => [
	                'type'        => 'select',
	                'label'       => esc_html__( 'Page', 'medical-business' ),
	                'choices'     => bizberg_get_all_pages()
	            ],
	        ],
	    ]
    ));

}