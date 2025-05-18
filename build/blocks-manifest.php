<?php
// This file is generated. Do not modify it manually.
return array(
	'slider' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'tt-prime-testimonial-block/slider',
		'version' => '0.1.0',
		'title' => 'Slider',
		'category' => 'text',
		'icon' => 'smiley',
		'description' => 'Make a testimonials slider',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'prime-testimonial-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	),
	'testimonial' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'tt-prime-testimonial-block/testimonial',
		'version' => '0.1.0',
		'title' => 'Testimonial',
		'category' => 'text',
		'icon' => 'smiley',
		'description' => 'Create a simple testimonial',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'align' => true
		),
		'attributes' => array(
			'review' => array(
				'type' => 'string',
				'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
			),
			'user_name' => array(
				'type' => 'string',
				'default' => 'Jhon Doe'
			),
			'user_company_name' => array(
				'type' => 'string',
				'default' => 'Company Name'
			),
			'user_image' => array(
				'type' => 'object',
				'default' => array(
					'id' => '',
					'alt' => '',
					'url' => ''
				)
			)
		),
		'textdomain' => 'prime-testimonial-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
