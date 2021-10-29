<?php

// return [
// 	'mode'                  => 'utf-8',
// 	'format'                => 'A4',
// 	'author'                => '',
// 	'subject'               => '',
// 	'keywords'              => '',
// 	'creator'               => 'Laravel Pdf',
// 	'display_mode'          => 'fullpage',
// 	'tempDir'               => base_path('../temp/'),
// 	'pdf_a'                 => false,
// 	'pdf_a_auto'            => false,
// 	'icc_profile_path'      => ''
// ];

return [
	'mode'                  => 'utf-8',
	'format'                => 'A4',
	'author'                => 'Hadi',
	'subject'               => '',
	'keywords'              => '',
	'creator'               => 'Hadi',
	'display_mode'          => 'fullpage',
	'tempDir'               => base_path('../temp/'),
	'font_path' => base_path('public/fonts/'),
	'font_data' => [
	   'fa' => [
		  'R'  => 'Vazir-Medium.ttf',
		  'B'  => 'Vazir-Bold.ttf',
		  'useOTL' => 0xFF,
		  'useKashida' => 75,
	   ],
	   'en' => [
		  'R'  => 'Gothic/Century Gothic.ttf',
		  'B'  => 'Gothic/GOTHICB.ttf',
	   ]
	]
 ];