<?php
defined('TYPO3_MODE') || die('Access denied.');


$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['b'][] = 'OliverThiele\OtBootstrap4\ViewHelpers';

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['otBootstrap4'] = 'EXT:ot_bootstrap4/Configuration/RTE/OtBootstrap4.yaml';

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
        '@import "EXT:ot_bootstrap4/Configuration/TSconfig/User/UserTSconfigFile.tsconfig"'
    );
}
