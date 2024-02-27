<?php
if (!defined('TYPO3')) {
	die ('Access denied.');
}


$tmp_msrouten_columns = array(

	'guide_name' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_guide.guide_name',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim,required'
		),
	),
	'guide_description' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_guide.guide_description',
		'config' => array(
			'type' => 'text',
			'cols' => 40,
			'rows' => 15,
			'eval' => 'trim,required'
		),
	),
	'guide_author' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_guide.guide_author',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim,required'
		),
	),
	'guide_i_s_b_n' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_guide.guide_i_s_b_n',
		'config' => array(
			'type' => 'input',
			'size' => 4,
			'eval' => 'int'
		),
	),
	'guide_price' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_guide.guide_price',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news',$tmp_msrouten_columns);
