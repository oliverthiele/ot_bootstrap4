<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'ot_bootstrap4',
    'Configuration/PageTS/BackendLayouts.tsconfig',
    'Backend Layouts: Homepage/Default'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'ot_bootstrap4',
    'Configuration/PageTS/AdditionalBackendLayouts.tsconfig',
    'Additional Backend Layouts'
);
