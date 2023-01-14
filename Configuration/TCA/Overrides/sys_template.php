<?php
defined('TYPO3') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
	'bug99534',
	'Configuration/TypoScript/',
	'Bug 99534 Demo'
);
