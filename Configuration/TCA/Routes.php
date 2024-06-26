<?php
if (!defined ('TYPO3')) {
	die ('Access denied.');
}
$GLOBALS['TCA']['tx_msrouten_domain_model_routes'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes',
		'label' => 'routen_name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'dividers2tabs' => TRUE,
		'sortby' =>'sorting',
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
		'searchFields' => 'routen_name,level_short,erstbegeher,level,elevel,climbtime,climbdistance,exposition,wandhoehe,material,beauty,frequenz,route_description,level_long,absicherung,zustieg,einstieg,huette,hints,abstieg,verlauf,erstbegeher_lang,quelle,topo,topo_bu,topo_alt,topo_title,wandbilder2024,wandbild,wandbild_bu,wandbild_alt,wandbild_title,action_bild1,action_bild1_bu,action_bild1_alt,actionbild1_title,action_bild2,action_bild2_bu,action_bild2_alt,action_bild2_title,action_bild3,action_bild3_bu,action_bild3_alt,action_bild3_title,galerie,pdf,linkextern,walls,guide,sorting_markus',
//		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('msrouten') . 'Resources/Public/Icons/tx_msrouten_domain_model_routes.gif'
	),
);

$GLOBALS['TCA']['tx_msrouten_domain_model_routes'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_msrouten_domain_model_routes']['ctrl'],
	'interface' => array(),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, routen_name, slug, level_long, level_short, level, elevel, alevel, climbtime, climbdistance, wandhoehe, exposition, material, beauty, frequenz, route_description;;;richtext:rte_transform[mode=ts_links], absicherung;;;richtext:rte_transform[mode=ts_links], zustieg;;;richtext:rte_transform[mode=ts_links], einstieg;;;richtext:rte_transform[mode=ts_links], verlauf;;;richtext:rte_transform[mode=ts_links], abstieg;;;richtext:rte_transform[mode=ts_links], huette;;;richtext:rte_transform[mode=ts_css], hints;;;richtext:rte_transform[mode=ts_links], erstbegeher_lang;;;richtext:rte_transform[mode=ts_links], erstbegeher, quelle;;;richtext:rte_transform[mode=ts_links], topo2024, topo, topo_bu;;;richtext:rte_transform[mode=ts_links], topo_alt, topo_title,wandbilder2
		024, wandbild, wandbild_bu;;;richtext:rte_transform[mode=ts_links], wandbilder2024,wandbild_alt, wandbild_title, actionbilder2024, action_bild1, action_bild1_bu;;;richtext:rte_transform[mode=ts_links], action_bild1_alt, actionbild1_title, action_bild2, action_bild2_bu;;;richtext:rte_transform[mode=ts_links], action_bild2_alt, action_bild2_title, action_bild3, action_bild3_bu;;;richtext:rte_transform[mode=ts_links], action_bild3_alt, action_bild3_title, galerie2024, galerie, pdf2024, pdf, sorting_markus, linkextern;;;richtext:rte_transform[mode=ts_links], walls, guide,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
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
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
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
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
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
		'routen_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.routen_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'required' => 'true'
			),
		),
		'level_short' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.level_short',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'erstbegeher' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.erstbegeher',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'level' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.level',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'elevel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.elevel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'alevel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.alevel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'climbtime' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.climbtime',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'climbdistance' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.climbdistance',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'exposition' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.exposition',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'wandhoehe' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.wandhoehe',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'material' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.material',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'beauty' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.beauty',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		'frequenz' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.frequenz',
			'config' => [
				'type' => 'number',
				'size' => 4,
			],
		),
		'route_description' => array(
			'exclude' => 0,
			'label' => 'Routencharakter',
			'config' => [
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'enableRichtext' => true,
			],
		),
		'level_long' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.level_long',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'absicherung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.absicherung',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim',
				'enableRichtext' => true,
			),
			'defaultExtras' => 'richtext[]',
		),
		'zustieg' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.zustieg',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim',
				'enableRichtext' => true,
			),
			'defaultExtras' => 'richtext[]',
		),
		'einstieg' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.einstieg',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'enableRichtext' => true,
			),
			'defaultExtras' => 'richtext[]',
		),
		'huette' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.huette',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim',
				'enableRichtext' => true,
			),
			'defaultExtras' => 'richtext[]',		),
		'hints' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.hints',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim',
				'enableRichtext' => true,
			),
			'defaultExtras' => 'richtext[]',
		),
		'abstieg' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.abstieg',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim',
				'enableRichtext' => true,
			),
			'defaultExtras' => 'richtext[]',
		),
		'verlauf' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.verlauf',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim',
				'enableRichtext' => true,
			),
		),
		'erstbegeher_lang' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.erstbegeher_lang',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim',
				'enableRichtext' => true,
			),
			'defaultExtras' => 'richtext[]',
		),
		'quelle' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.quelle',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim',
				'enableRichtext' => true,
			),
			'defaultExtras' => 'richtext[]',
		),
		'topo' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.topo',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'topo_bu' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.topo_bu',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim',
				'enableRichtext' => true,
			),
			'defaultExtras' => 'richtext[]',
		),
		'topo_alt' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.topo_alt',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			),
		),
		'topo_title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.topo_title',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			),
		),
		 'topo2024' => [
			'label' => 'topo_2024',
			'config' => [
				'type' => 'file',
				'maxitems' => 6,
				'allowed' => 'common-image-types'
			],
		],
		'wandbild' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.wandbild',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'wandbild_bu' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.wandbild_bu',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim',
				'enableRichtext' => true,
			),
			'defaultExtras' => 'richtext[]',
		),
		'wandbild_alt' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.wandbild_alt',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			),
		),
		'wandbild_title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.wandbild_title',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			),
		),
		 'wandbilder2024' => [
			'label' => 'wandbilder_2024',
			'config' => [
				'type' => 'file',
				'maxitems' => 6,
				'allowed' => 'common-image-types'
			],
		],
		'action_bild1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.action_bild1',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'action_bild1_bu' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.action_bild1_bu',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim',
				'enableRichtext' => true,
			),
			'defaultExtras' => 'richtext[]',
		),
		'action_bild1_alt' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.action_bild1_alt',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			),
		),
		'actionbild1_title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.actionbild1_title',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			),
		),
		'action_bild2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.action_bild2',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'action_bild2_bu' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.action_bild2_bu',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim',
					'enableRichtext' => true,
			),
			'defaultExtras' => 'richtext[]',
		),
		'action_bild2_alt' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.action_bild2_alt',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			),
		),
		'action_bild2_title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.action_bild2_title',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			),
		),
		'action_bild3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.action_bild3',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'action_bild3_bu' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.action_bild3_bu',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim',
				'enableRichtext' => true,
			),
			'defaultExtras' => 'richtext[]',
		),
		'action_bild3_alt' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.action_bild3_alt',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			),
		),
		'action_bild3_title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.action_bild3_title',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 1,
				'eval' => 'trim'
			),
		),
		 'actionbilder2024' => [
			'label' => 'actionbilder_2024',
			'config' => [
				'type' => 'file',
				'maxitems' => 6,
				'allowed' => 'common-image-types'
			],
		],
		'galerie' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.galerie',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		 'galerie2024' => [
			'label' => 'Galerie_2024',
			'config' => [
				'type' => 'file',
				'maxitems' => 6,
				'allowed' => 'common-image-types'
			],
		],
		
		'pdf' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.pdf',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		 'pdf2024' => [
			'label' => 'PDF_2024',
			'config' => [
				'type' => 'file',
				'maxitems' => 6,
				'allowed' => 'pdf'
			],
		],
		'linkextern' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.linkextern',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 1,
				'eval' => 'trim',
				'enableRichtext' => true,
			),
			'defaultExtras' => 'richtext[]',
		),
		'walls' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.walls',
			'config' => array(
				'type' => 'select',
				 'renderType' => 'selectSingle',
				'foreign_table' => 'tx_msrouten_domain_model_walls',
				'foreign_table_where' => 'AND tx_msrouten_domain_model_walls.pid=###CURRENT_PID###',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'guide' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.guide',
			'config' => array(
				'type' => 'select',
				 'renderType' => 'selectSingle',
				'foreign_table' => 'tx_news_domain_model_news',
				'foreign_table_where' => 'AND tx_news_domain_model_news.PID=1619',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'sorting_markus'  => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:msrouten/Resources/Private/Language/locallang_db.xlf:tx_msrouten_domain_model_routes.sorting_markus',
			'config' => array(
				'type' => 'text',
				'cols' => 6,
				'eval' => 'int'
			),
		),
		'slug' => [
			'label' => 'slug',
			'exclude' => 1,
			'config' => [
				'type' => 'slug',
				'generatorOptions' => [
					'fields' => ['routen_name'],
					'fieldSeparator' => '/',
					'prefixParentPageSlug' => true,
					'replacements' => [
						'/' => '',
						', ' => '',
						'(' => '',
						')' => '',
						'"' => '',
						'.' => ''

					],
				],
				'fallbackCharacter' => '-',
				'eval' => 'uniqueInSite',
			],
		],
	),
);