<?php

defined('TYPO3') or die();

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Victor\VictorSitepackage\Controller\ProjectController;

ExtensionUtility::configurePlugin(
    'VictorSitepackage',
    'ProjectShowcase',
    [
        ProjectController::class => 'list',
    ],
    []
);