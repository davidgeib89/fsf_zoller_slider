<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'FREESIXTYFIVE.FsfZollerSlider',
            'Zollerslider',
            [
                'Slider' => 'list'
            ],
            // non-cacheable actions
            [
                'Slider' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        zollerslider {
                            iconIdentifier = fsf_zoller_slider-plugin-zollerslider
                            title = LLL:EXT:fsf_zoller_slider/Resources/Private/Language/locallang_db.xlf:tx_fsf_zoller_slider_zollerslider.name
                            description = LLL:EXT:fsf_zoller_slider/Resources/Private/Language/locallang_db.xlf:tx_fsf_zoller_slider_zollerslider.description
                            tt_content_defValues {
                                CType = list
                                list_type = fsfzollerslider_zollerslider
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'fsf_zoller_slider-plugin-zollerslider',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:fsf_zoller_slider/Resources/Public/Icons/zoller_z.svg']
			);
		
    }
);
