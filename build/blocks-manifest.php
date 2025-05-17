<?php
// This file is generated. Do not modify it manually.
return array(
	'prime-testimonial-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'techtuzzle-prime-testimonial-block/prime-testimonial-block',
		'version' => '0.1.0',
		'title' => 'Prime Testimonial Block',
		'category' => 'text',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'attributes' => array(
			'description' => array(
				'type' => 'string',
				'default' => ''
			),
			'user_name' => array(
				'type' => 'string',
				'default' => ''
			),
			'user_company_name' => array(
				'type' => 'string',
				'default' => ''
			),
			'user_image' => array(
				'type' => 'object',
				'default' => array(
					'id' => 0,
					'alt' => '',
					'url' => ''
				)
			)
		),
		'supports' => array(
			'html' => false,
			'align' => true,
			'anchor' => true
		),
		'textdomain' => 'prime-testimonial-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	)
);
