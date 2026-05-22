<?php

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::registerPageTSConfigFile(
    'victor_sitepackage',
    'Configuration/TsConfig/Page/All.tsconfig',
    'Victor Sitepackage'
);