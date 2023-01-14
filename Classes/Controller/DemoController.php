<?php

namespace Amazing\Bug99534\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Http\Response;
use TYPO3\CMS\Core\Http\Stream;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class DemoController extends ActionController
{
	public function demoAction(): ResponseInterface
	{
		$file = GeneralUtility::getFileAbsFileName('EXT:bug99534/Resources/Public/Files/demo.pdf');
		$resource = @fopen($file, 'r');
		$response = new Response();
		return $response
			->withBody(new Stream($resource))
			->withHeader('Content-Type', 'application/pdf')
			->withHeader('Content-Disposition', 'inline; filename="demo.pdf"')
		;
	}
}
