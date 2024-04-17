<?php
if (!defined ('TYPO3')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_msrouten_domain_model_karten'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten',
		'label' => 'karten_name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'karten_name,nummer,massstab,land,isbn13,asin,stand,zone,li_unten_utm_rechts,uli_unten_utm_hoch,li_oben_utm_rechts,li_oben_utm_hoch,re_oben_utm_rechts,re_oben_utm_hoch,re_unten_utm_rechts,re_unten_utm_hoch,zone2,li_unten_utm_rechts2,li_unten_utm_hoch2,li_oben_utm_rechts2,li_oben_utm_hoch2,re_oben_utm_rechts2,re_oben_utm_hoch2,re_unten_utm_rechts2,re_unten_utm_hoch2,',
//		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('msrouten') . 'Resources/Public/Icons/tx_msrouten_domain_model_karten.gif'
	),
);

$GLOBALS['TCA']['tx_msrouten_domain_model_karten'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_msrouten_domain_model_karten']['ctrl'],
	'interface' => array(	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, karten_name, nummer, massstab, land, isbn13, asin, stand, zone, li_unten_utm_rechts, uli_unten_utm_hoch, li_oben_utm_rechts, li_oben_utm_hoch, re_oben_utm_rechts, re_oben_utm_hoch, re_unten_utm_rechts, re_unten_utm_hoch, zone2, li_unten_utm_rechts2, li_unten_utm_hoch2, li_oben_utm_rechts2, li_oben_utm_hoch2, re_oben_utm_rechts2, re_oben_utm_hoch2, re_unten_utm_rechts2, re_unten_utm_hoch2,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => [
                'type' => 'language',
            ],
		),
		
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'default' => 0,
                'items' => [
                    ['label' => '', 'value' => ''],
				]
            ],
        ],
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => [
				'type' => 'datetime',
         		'format' => 'date',
				'size' => 13,
				'checkbox' => 0,
				'default' => 0,
				'range' => [
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				],
			],
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => [
				'type' => 'datetime',
         		'format' => 'date',
				'size' => 13,
				'checkbox' => 0,
				'default' => 0,
				'range' => [
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				],
			],
		),
		'karten_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.karten_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'nummer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.nummer',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'massstab' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.massstab',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'land' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.land',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'isbn13' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.isbn13',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'asin' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.asin',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'stand' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.stand',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'zone' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.zone',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		'li_unten_utm_rechts' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.li_unten_utm_rechts',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		'uli_unten_utm_hoch' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.uli_unten_utm_hoch',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		'li_oben_utm_rechts' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.li_oben_utm_rechts',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		'li_oben_utm_hoch' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.li_oben_utm_hoch',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		're_oben_utm_rechts' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.re_oben_utm_rechts',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		're_oben_utm_hoch' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.re_oben_utm_hoch',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		're_unten_utm_rechts' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.re_unten_utm_rechts',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		're_unten_utm_hoch' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.re_unten_utm_hoch',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		'zone2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.zone2',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		'li_unten_utm_rechts2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.li_unten_utm_rechts2',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		'li_unten_utm_hoch2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.li_unten_utm_hoch2',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		'li_oben_utm_rechts2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.li_oben_utm_rechts2',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		'li_oben_utm_hoch2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.li_oben_utm_hoch2',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		're_oben_utm_rechts2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.re_oben_utm_rechts2',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		're_oben_utm_hoch2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.re_oben_utm_hoch2',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		're_unten_utm_rechts2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.re_unten_utm_rechts2',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		're_unten_utm_hoch2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_karten.re_unten_utm_hoch2',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
	),		
);

?>