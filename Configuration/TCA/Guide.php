<?php
if (!defined ('TYPO3')) {
	die ('Access denied.');
}

//$GLOBALS['TCA']['tx_news']['columns']$GLOBALS['TCA']['tx_news']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_news.tx_extbase_type.Tx_Msrouten_Guide','Tx_Msrouten_Guide');

$GLOBALS['TCA']['tx_news_domain_model_news']['types']['Tx_Msrouten_Guide']['showitem'] = $GLOBALS['TCA']['tx_news_domain_model_news']['types']['1']['showitem'];
$GLOBALS['TCA']['tx_news_domain_model_news']['types']['Tx_Msrouten_Guide']['showitem'] .= ',--div--;LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_guide,';
$GLOBALS['TCA']['tx_news_domain_model_news']['types']['Tx_Msrouten_Guide']['showitem'] .= 'guide_name, guide_description, guide_author, guide_i_s_b_n, guide_price';

?>