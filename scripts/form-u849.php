<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.0.309
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Shop Formular Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => 'index.html',
	'resources' => array(
		'checkbox_checked' => 'Selected',
		'checkbox_unchecked' => 'Unselected',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'pfeffer.production@gmail.com',
		'to' => 'pfeffer.production@gmail.com'
	),
	'fields' => array(
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.',
				'format' => 'Field \'Email\' has an invalid email address.'
			)
		),
		'custom_U886' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Message',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Message\' is required.'
			)
		),
		'custom_U939' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Name\' is required.'
			)
		),
		'custom_U943' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Home Phone',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Home Phone\' is required.'
			)
		),
		'custom_U947' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Home Address',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Home Address\' is required.'
			)
		),
		'custom_U951' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'City',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'City\' is required.'
			)
		),
		'custom_U955' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'State',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'State\' is required.'
			)
		),
		'custom_U959' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Postcode',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Postcode\' is required.'
			)
		),
		'custom_U963' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'Country',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Country\' is required.'
			)
		),
		'custom_U1009' => array(
			'order' => 10,
			'type' => 'checkbox',
			'label' => 'Tickbox Label',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Tickbox Label\' is required.'
			)
		)
	)
);

process_form($form);
?>
