<?php

/**
 * Extension Manager/Repository config file for ext "site_package_bootstrap".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Site Package  Bootstrap',
    'description' => 'Site Package based on Bootstrap Package',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'rte_ckeditor' => '8.7.0-8.7.99',
            'bootstrap_package' => '8.0.0-8.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'HofUniversityIndie\\SitePackageBootstrap\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Oliver Hader',
    'author_email' => 'oliver.hader@typo3.org',
    'author_company' => 'Hof University Indie',
    'version' => '1.0.0',
];
