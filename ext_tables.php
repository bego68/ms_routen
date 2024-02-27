<?php
if (!defined('TYPO3')) {
	die ('Access denied.');
}

// jetzt in /Configuration/TCA/Overides/sys_templates.php \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('msrouten', 'Configuration/TypoScript', 'MS Routen');
(static function() {
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_msrouten_domain_model_routes', 'EXT:msrouten/Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_routes.xml');
 \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_msrouten_domain_model_routes');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_msrouten_domain_model_mounts', 'EXT:msrouten/Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_mounts.xml');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_msrouten_domain_model_walls', 'EXT:msrouten/Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_walls.xml');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_msrouten_domain_model_pictures', 'EXT:msrouten/Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_pictures.xml');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_msrouten_domain_model_karten', 'EXT:msrouten/Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_karten.xml');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_msrouten_domain_model_gebirge', 'EXT:msrouten/Resources/Private/Language/locallang_csh_tx_msrouten_domain_model_gebirge.xml');
   
})();

