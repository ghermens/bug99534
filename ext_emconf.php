<?php
$EM_CONF[$_EXTKEY] = [
	'title' => 'Bug99534',
	'description' => 'Demonstrates bug 99534',
	'category' => 'plugin',
	'author' => 'Gregor Hermens',
	'author_email' => 'gregor.hermens@a-mazing.de',
	'author_company' => 'www.a-mazing.de',
	'state' => 'test',
	'version' => '0.0.1',
	'constraints' => [
		'depends' => [
			'typo3' => '11.5.0-12.99.99',
			'fluid_styled_content',
		],
		'conflicts' => [
		],
		'suggests' => [
		],
	],
	'autoload' => [
		'psr-4' => [
			'Amazing\\Bug99534\\' => 'Classes',
		],
	],
];
