<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.0.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Contact Form  إرسال',
	'heading' => 'إرسال نموذج جديد',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'تم التحديد',
		'checkbox_unchecked' => 'تم إلغاء التحديد',
		'submitted_from' => 'تم إرسال النموذج من موقع الويب: %s',
		'submitted_by' => 'عنوان IP الخاص بالزائر: %s',
		'too_many_submissions' => 'صدر عن عنوان IP هذا مؤخرًا عدد كبير جدًا من عمليات الإرسال',
		'failed_to_send_email' => 'فشل إرسال البريد الإلكتروني',
		'invalid_reCAPTCHA_private_key' => 'مفتاح reCAPTCHA الخاص غير صالح.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'نوع حقل غير معروف \'%s\'.',
		'invalid_form_config' => 'للحقل \'%s\' تكوين غير صالح.',
		'unknown_method' => 'أسلوب طلب الخادم غير معروف'
	),
	'email' => array(
		'from' => 'Ngo.alsanabil@gmail.com',
		'to' => 'Ngo.alsanabil@gmail.com'
	),
	'fields' => array(
		'custom_U14625' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'الحقل \'Name\' مطلوب.'
			)
		),
		'Email' => array(
			'order' => 1,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'الحقل \'Email\' مطلوب.',
				'format' => 'للحقل \'Email\' عنوان بريد إلكتروني غير صالح.'
			)
		),
		'custom_U14633' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		)
	)
);

process_form($form);
?>
