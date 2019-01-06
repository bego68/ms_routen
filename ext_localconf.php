<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Bertigolf.msrouten',
	'Msbergrouten',
	array(
		'Routes' => 'list, new, create, edit, update, delete',
		'Mounts' => 'list, show, new, create, edit, update, delete',
		'Walls' => 'list, show, new, create, edit, update, delete',
		'Pictures' => 'list, show, new, create, edit, update, delete',
		'Guide' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Routes' => 'create, update, delete',
		'Mounts' => 'create, update, delete',
		'Walls' => 'create, update, delete',
		'Pictures' => 'create, update, delete',
		'Guide' => 'create, update, delete',
		
	)
);


TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Bertigolf.msrouten',
		'MsbergroutenShow',
		array(
				'Routes' => 'show',
						),
		// non-cacheable actions
		array(
				
		)
);


TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Bertigolf.msrouten',
	'MsbergroutenGebirge',
	array(
		'Routes' => 'listGebirge, list, new, create, edit, update, delete',
		'Mounts' => 'list, show, new, create, edit, update, delete',
		'Walls' => 'list, show, new, create, edit, update, delete',
		'Pictures' => 'list, show, new, create, edit, update, delete',
		'Guide' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Routes' => 'create, update, delete',
		'Mounts' => 'create, update, delete',
		'Walls' => 'create, update, delete',
		'Pictures' => 'create, update, delete',
		'Guide' => 'create, update, delete',
		
	)
);