<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$extensionName = 'akaccordion';

#######################################
# Accordion plugin start
#######################################
$pluginSignature = $extensionName . '_accordion';
$pluginIcon = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/plugin_accordion.png';
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Accordion',
	'Accordion',
	$pluginIcon
);
# show an icon in the page view
\TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon('tt_content', $pluginSignature, $pluginIcon);



$TCA['tt_content']['types'][$pluginSignature]['showitem'] = '
		--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
		--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.header;header,
		tx_akaccordion_accordion_content,
	--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
		--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
		--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.textlayout;textlayout,
	--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
		--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
		--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
	--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';

# cleanup variables
unset($extensionName);
unset($pluginIcon);
unset($pluginSignature);
#######################################
# Accordion plugin end
#######################################


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Accordion');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_akaccordion_domain_model_accordioncontent', 'EXT:ak_accordion/Resources/Private/Language/locallang_csh_tx_akaccordion_domain_model_accordioncontent.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_akaccordion_domain_model_accordioncontent');
$TCA['tx_akaccordion_domain_model_accordioncontent'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:ak_accordion/Resources/Private/Language/locallang_db.xlf:tx_akaccordion_domain_model_accordioncontent',
		'label' => 'head',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'hideTable' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		'searchFields' => 'head,bodytext,image,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/AccordionContent.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_akaccordion_domain_model_accordioncontent.gif'
	),
);

$tempColumnsTtContent = array(
	// variable content - reference field
	'tx_akaccordion_accordion_content' => array(
		'exclude' => 0,
		'label' => 'Accordion',
		'config' => array(
			'type' => 'inline',
			'foreign_table' => 'tx_akaccordion_domain_model_accordioncontent',
			'foreign_field' => 'tt_content_uid',
			'foreign_sortby' => 'content_element_sorting',
			'maxitems'      => 9999,
			'appearance' => array(
				'newRecordLinkAddTitle' => TRUE,
				'collapse' => 0,
				'levelLinksPosition' => 'bottom',
				'showSynchronizationLink' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showAllLocalizationLink' => 1,
				'useSortable' => 1,
				'enabledControls' => array(
					'info' => FALSE,
				),
			),
		),
	),
);

\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('tt_content');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumnsTtContent);


?>