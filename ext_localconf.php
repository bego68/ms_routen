<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Bertigolf.msrouten',
	'Msbergrouten',
	array(
		'Bertigolf\Msrouten\Controller\RoutesController' => 'list, new, create, edit, update, delete',
		'\Bertigolf\Msrouten\Controller\MountsController' => 'list, show, new, create, edit, update, delete',
		'\Bertigolf\Msrouten\Controller\WallsController' => 'list, show, new, create, edit, update, delete',
		'\Bertigolf\Msrouten\Controller\PicturesController' => 'list, show, new, create, edit, update, delete',
		'\Bertigolf\Msrouten\Controller\GuideController' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Bertigolf\Msrouten\Controller\RoutesController' => 'create, update, delete',
		'\Bertigolf\Msrouten\Controller\MountsController' => 'create, update, delete',
		'\Bertigolf\Msrouten\Controller\WallsController' => 'create, update, delete',
		'\Bertigolf\Msrouten\Controller\PicturesController' => 'create, update, delete',
		'\Bertigolf\Msrouten\Controller\GuideController' => 'create, update, delete',
		
	)
);


TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Bertigolf.msrouten',
		'MsbergroutenShow',
		array(
				'Bertigolf\Msrouten\Controller\RoutesController' => 'show',
						),
		// non-cacheable actions
		array(
				
		)
);


TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Bertigolf.msrouten',
	'MsbergroutenGebirge',
	array(
		'Bertigolf\Msrouten\Controller\RoutesController' => 'listGebirge, list, new, create, edit, update, delete',
		'Bertigolf\Msrouten\Controller\MountsController' => 'list, show, new, create, edit, update, delete',
		'Bertigolf\Msrouten\Controller\WallsController' => 'list, show, new, create, edit, update, delete',
		'Bertigolf\Msrouten\Controller\PicturesController' => 'list, show, new, create, edit, update, delete',
		'Bertigolf\Msrouten\Controller\GuideController' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Bertigolf\Msrouten\Controller\RoutesController' => 'create, update, delete',
		'\Bertigolf\Msrouten\Controller\MountsController' => 'create, update, delete',
		'\Bertigolf\Msrouten\Controller\WallsController' => 'create, update, delete',
		'\Bertigolf\Msrouten\Controller\PicturesController' => 'create, update, delete',
		'\Bertigolf\Msrouten\Controller\GuideController' => 'create, update, delete',
		
	)
);