<?php

(function() {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Bug99534',
		'demo',
		[
			\Amazing\Bug99534\DemoController::class => 'demo',
		],
		[
			\Amazing\Bug99534\DemoController::class => 'demo',
		]
	);
})();
