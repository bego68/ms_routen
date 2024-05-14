<?php
if (!defined('TYPO3')) {
	die ('Access denied.');
}

TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'msrouten',
	'Msbergrouten',
	'msbergrouten'
);

 // Flexform
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['msrouten_msbergrouten'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('msrouten_msbergrouten', 'FILE:EXT:'.'msrouten'.'/Configuration/FlexForms/flexform.xml');


TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'msrouten',
	'MsbergroutenGebirge',
	'msbergroutengebirge'
);


TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		'msrouten',
		'MsbergroutenShow',
		'msbergroutenshow'
);


 // Flexform
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['msrouten_msbergroutengebirge'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('msrouten_msbergroutengebirge', 'FILE:EXT:'.'msrouten'.'/Configuration/FlexForms/flexform.xml');

