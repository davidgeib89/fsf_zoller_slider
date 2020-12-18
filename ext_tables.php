<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'FREESIXTYFIVE.FsfZollerSlider',
            'Zollerslider',
            'Zoller Slider'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('fsf_zoller_slider', 'Configuration/TypoScript', 'Zoller Slider');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fsfzollerslider_domain_model_slider', 'EXT:fsf_zoller_slider/Resources/Private/Language/locallang_csh_tx_fsfzollerslider_domain_model_slider.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fsfzollerslider_domain_model_slider');

    }
);
