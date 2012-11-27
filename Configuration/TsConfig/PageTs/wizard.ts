mod.wizards.newContentElement.wizardItems.common.elements.ak_accordion {
	icon = ../typo3conf/ext/ak_accordion/Resources/Public/Icons/Wizard/plugin_accordion.png
	title = LLL:EXT:ak_accordion/Resources/Private/Language/locallang_wizard.xlf:plugin_accordion
	description = LLL:EXT:ak_accordion/Resources/Private/Language/locallang_wizard.xlf:plugin_accordion_description
	tt_content_defValues {
		CType = akaccordion_accordion
	}
}

mod.wizards.newContentElement.wizardItems.common.show := addToList(ak_accordion)