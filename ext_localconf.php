<?php
if (!defined('TYPO3')) {
	die ('Access denied.');
}


(static function() {
TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'msrouten',
	'Msbergrouten',
	array(
		\Bertigolf\Msrouten\Controller\RoutesController::class => 'list, new, create, edit, update, delete',
		\Bertigolf\Msrouten\Controller\MountsController::class => 'list, show, new, create, edit, update, delete',
		\Bertigolf\Msrouten\Controller\WallsController::class => 'list, show, new, create, edit, update, delete',
		\Bertigolf\Msrouten\Controller\PicturesController::class => 'list, show, new, create, edit, update, delete'
		
	),
	// non-cacheable actions
	array(
		\Bertigolf\Msrouten\Controller\RoutesController::class => 'create, update, delete',
		\Bertigolf\Msrouten\Controller\MountsController::class => 'create, update, delete',
		\Bertigolf\Msrouten\Controller\WallsController::class => 'create, update, delete',
		\Bertigolf\Msrouten\Controller\PicturesController::class => 'create, update, delete'
		
	)
);


TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'msrouten',
		'MsbergroutenShow',
		array(
				\Bertigolf\Msrouten\Controller\RoutesController::class => 'show'
						),
		// non-cacheable actions
		array(
				
		)
);


TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'msrouten',
	'MsbergroutenGebirge',
	array(
		\Bertigolf\Msrouten\Controller\RoutesController::class => 'listGebirge, list, new, create, edit, update, delete',
		\Bertigolf\Msrouten\Controller\MountsController::class => 'list, show, new, create, edit, update, delete',
		\Bertigolf\Msrouten\Controller\WallsController::class => 'list, show, new, create, edit, update, delete',
		\Bertigolf\Msrouten\Controller\PicturesController::class => 'list, show, new, create, edit, update, delete'
		
	),
	// non-cacheable actions
	array(
		\Bertigolf\Msrouten\Controller\RoutesController::class => 'create, update, delete',
		\Bertigolf\Msrouten\Controller\MountsController::class => 'create, update, delete',
		\Bertigolf\Msrouten\Controller\WallsController::class => 'create, update, delete',
		\Bertigolf\Msrouten\Controller\PicturesController::class => 'create, update, delete'
		
	)
);
	
})();
