<?php
return [
    'BE' => [
        'cookieSameSite' => 'lax',
        'debug' => false,
        'installToolPassword' => '',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => 'EXT:xm_t3cmd24_sitepackage/Resources/Public/Backend/Images/camp_bg.jpg',
            'loginFootnote' => '',
            'loginHighlightColor' => '#c92518',
            'loginLogo' => 'EXT:xm_t3cmd24_sitepackage/Resources/Public/Backend/Images/logo_t3cmd.svg',
            'loginLogoAlt' => '',
        ],
        'bw_icons' => [
            'pages' => '0',
            'sys_category' => '0',
            'tt_content' => '0',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'oauth2_client' => [
            'providers' => [
                'authentik' => [
                    'description' => 'Login with XIMA',
                    'iconIdentifier' => 'xima-x',
                    'implementationClassName' => 'Xima\\XimaOauth2Extended\\ResourceProvider\\AuthentikResourceProvider',
                    'label' => 'Authentik',
                    'options' => [
                        'clientId' => '',
                        'clientSecret' => '',
                        'scopeSeparator' => ' ',
                        'scopes' => [
                            'openid',
                            'profile',
                            'email',
                            'avatar',
                        ],
                        'urlAccessToken' => '',
                        'urlAuthorize' => '',
                        'urlResourceOwnerDetails' => '',
                    ],
                    'scopes' => [
                        'backend',
                    ],
                ],
            ],
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
        ],
        'xima_oauth2_extended' => [
            'oauth2_client_providers' => [
                'authentik' => [
                    'createBackendUser' => true,
                    'defaultBackendAdminGroups' => 'all',
                    'defaultBackendLanguage' => 'de',
                    'imageStorageBackendIdentifier' => '1:/user_upload/oauth',
                    'resolverClassName' => 'Xima\\XimaOauth2Extended\\ResourceResolver\\AuthentikResourceResolver',
                ],
            ],
        ],
    ],
    'FE' => [
        'cacheHash' => [
            'enforceValidation' => true,
        ],
        'debug' => false,
        'disableNoCacheParameter' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'defaultMailFromAddress' => 'noreply@example.com',
        'transport' => 'sendmail',
        'transport_mbox_file' => '/var/www/html/var/log/mail.log',
        'transport_sendmail_command' => '/usr/local/bin/mailpit sendmail -t --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'UTF8filesystem' => true,
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => '',
        'exceptionalErrors' => 4096,
        'features' => [
            'security.backend.enforceContentSecurityPolicy' => true,
            'security.usePasswordPolicyForFrontendUsers' => true,
        ],
        'sitename' => 'TYPO3Camp Mitteldeutschland [LIVE]',
        'systemMaintainers' => [
            1,
        ],
    ],
];
