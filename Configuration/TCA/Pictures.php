<?php
if (!defined ('TYPO3')) {
	die ('Access denied.');
}
$GLOBALS['TCA']['tx_msrouten_domain_model_pictures'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_pictures',
		'label' => 'picture_wall',
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
		'searchFields' => 'picture_wall,wall_pic_bu,wall_pic_alt,wall_pic_title,',
//		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('msrouten') . 'Resources/Public/Icons/tx_msrouten_domain_model_pictures.gif'
	),
);
$GLOBALS['TCA']['tx_msrouten_domain_model_pictures'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_msrouten_domain_model_pictures']['ctrl'],
	'interface' => array(	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, picture_wall, wall_pic_bu, wall_pic_alt, wall_pic_title,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
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
                    ['label' => '', 'value' => '']
                ],
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
		'picture_wall' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_pictures.picture_wall',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'wall_pic_bu' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_pictures.wall_pic_bu',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'module' => array(
            				'name' => 'wizard_rte'),
						'title' => 'LLL:EXT:cms/locallang_ttc.xml:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
			'defaultExtras' => 'richtext[]',
		),
		'wall_pic_alt' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_pictures.wall_pic_alt',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'wall_pic_title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xml:tx_msrouten_domain_model_pictures.wall_pic_title',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
	),
);

?>