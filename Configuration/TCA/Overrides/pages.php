<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'ot_bootstrap4',
    'Configuration/TSconfig/Page/BackendLayouts.tsconfig',
    'Backend Layouts: Homepage/Default'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'ot_bootstrap4',
    'Configuration/TSconfig/Page/AdditionalBackendLayouts.tsconfig',
    'Additional Backend Layouts'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'ot_bootstrap4',
    'Configuration/TSconfig/Page/RTE.tsconfig',
    'Extended RTE'
);
