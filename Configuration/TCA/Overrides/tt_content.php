<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
    // Add the FlexForm
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['fsfzollerslider_zollerslider'] = 'recursive,select_key,pages';
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['fsfzollerslider_zollerslider'] = 'pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        'fsfzollerslider_zollerslider',
        'FILE:EXT:fsf_zoller_slider/Configuration/FlexForms/flexform.xml'
    );
});
