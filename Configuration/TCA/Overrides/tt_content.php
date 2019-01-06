<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Bertigolf.msrouten',
	'Msbergrouten',
	'msbergrouten'
);

 // Flexform
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['msrouten_msbergrouten'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('msrouten_msbergrouten', 'FILE:EXT:'.'msrouten'.'/Configuration/FlexForms/flexform.xml');


TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Bertigolf.msrouten',
	'MsbergroutenGebirge',
	'msbergroutengebirge'
);


TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		'Bertigolf.msrouten',
		'MsbergroutenShow',
		'msbergroutenshow'
);


 // Flexform
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['msrouten_msbergroutengebirge'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('msrouten_msbergroutengebirge', 'FILE:EXT:'.'msrouten'.'/Configuration/FlexForms/flexform.xml');

