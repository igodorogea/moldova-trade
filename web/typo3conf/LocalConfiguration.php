<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$P$CvR3g8zv29us9101krmxiC7SpmmVIo0',
        'loginSecurityLevel' => 'rsa',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'dbname' => 'c9',
                'driver' => 'mysqli',
                'host' => 'localhost',
                'password' => '',
                'unix_socket' => '',
                'user' => 'root',
            ],
        ],
        'extTablesDefinitionScript' => 'extTables.php',
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:5:{s:9:"loginLogo";s:52:"EXT:mdtrade_package/Resources/Public/Images/logo.png";s:19:"loginHighlightColor";s:7:"#b68516";s:20:"loginBackgroundImage";s:0:"";s:11:"backendLogo";s:0:"";s:14:"backendFavicon";s:0:"";}',
            'bootstrap_package' => 'a:9:{s:21:"disableLessProcessing";s:1:"0";s:16:"disablePageTsRTE";s:1:"0";s:20:"disablePageTsTCEFORM";s:1:"0";s:20:"disablePageTsTCEMAIN";s:1:"0";s:21:"disablePageTsAdmPanel";s:1:"0";s:27:"disablePageTsBackendLayouts";s:1:"0";s:18:"disableBackendSkin";s:1:"0";s:4:"Logo";s:84:"../typo3conf/ext/bootstrap_package/Resources/Public/Images/Backend/TopBarLogo@2x.png";s:9:"LoginLogo";s:80:"../typo3conf/ext/bootstrap_package/Resources/Public/Images/Backend/LoginLogo.png";}',
            'crawler' => 'a:19:{s:9:"sleepTime";s:4:"1000";s:16:"sleepAfterFinish";s:2:"10";s:11:"countInARun";s:3:"100";s:14:"purgeQueueDays";s:2:"14";s:12:"processLimit";s:1:"1";s:17:"processMaxRunTime";s:3:"300";s:14:"maxCompileUrls";s:5:"10000";s:12:"processDebug";s:1:"0";s:14:"processVerbose";s:1:"0";s:16:"crawlHiddenPages";s:1:"0";s:7:"phpPath";s:12:"/usr/bin/php";s:14:"enableTimeslot";s:1:"1";s:11:"logFileName";s:0:"";s:9:"follow30x";s:0:"";s:18:"makeDirectRequests";s:1:"0";s:16:"frontendBasePath";s:1:"/";s:22:"cleanUpOldQueueEntries";s:1:"1";s:19:"cleanUpProcessedAge";s:1:"2";s:19:"cleanUpScheduledAge";s:1:"7";}',
            'feedit' => 'a:0:{}',
            'go_maps_ext' => 'a:3:{s:15:"include_library";s:1:"0";s:16:"include_manually";s:1:"0";s:8:"footerJS";s:1:"1";}',
            'gravatar' => 'a:3:{s:8:"fallback";s:5:"retro";s:16:"fallbackImageUrl";s:0:"";s:13:"forceProvider";s:0:"";}',
            'iconfont' => 'a:3:{s:8:"iconFont";s:11:"fontawesome";s:24:"customIconDefinitionFile";s:0:"";s:27:"enableHeaderRenderingOption";s:1:"0";}',
            'indexed_search' => 'a:18:{s:8:"pdftools";s:9:"/usr/bin/";s:8:"pdf_mode";s:2:"20";s:5:"unzip";s:9:"/usr/bin/";s:6:"catdoc";s:9:"/usr/bin/";s:6:"xlhtml";s:9:"/usr/bin/";s:7:"ppthtml";s:9:"/usr/bin/";s:5:"unrtf";s:9:"/usr/bin/";s:9:"debugMode";s:1:"0";s:18:"fullTextDataLength";s:1:"0";s:23:"disableFrontendIndexing";s:1:"0";s:21:"enableMetaphoneSearch";s:1:"1";s:6:"minAge";s:2:"24";s:6:"maxAge";s:1:"0";s:16:"maxExternalFiles";s:1:"5";s:26:"useCrawlerForExternalFiles";s:1:"0";s:11:"flagBitMask";s:3:"192";s:16:"ignoreExtensions";s:0:"";s:17:"indexExternalURLs";s:1:"0";}',
            'metaseo' => 'a:4:{s:10:"pagingSize";s:0:"";s:10:"enableBeta";s:0:"";s:23:"enableIntegrationTTNews";s:1:"1";s:29:"sitemap_clearCachePossibility";s:0:"";}',
            'nc_staticfilecache' => 'a:8:{s:23:"clearCacheForAllDomains";s:1:"1";s:22:"sendCacheControlHeader";s:1:"1";s:47:"sendCacheControlHeaderRedirectAfterCacheTimeout";s:1:"0";s:27:"enableStaticFileCompression";s:1:"1";s:23:"showGenerationSignature";s:1:"0";s:9:"fileTypes";s:7:"xml,rss";s:8:"strftime";s:14:"%d-%m-%y %H:%M";s:11:"recreateURI";s:1:"0";}',
            'news' => 'a:17:{s:29:"removeListActionFromFlexforms";s:1:"2";s:20:"pageModuleFieldsNews";s:317:"LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pagemodule_simple=title,datetime;LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pagemodule_advanced=title,datetime,teaser,categories;LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pagemodule_complex=title,datetime,teaser,categories,archive;";s:24:"pageModuleFieldsCategory";s:17:"title,description";s:11:"archiveDate";s:4:"date";s:13:"prependAtCopy";s:1:"1";s:6:"tagPid";s:1:"1";s:25:"showMediaDescriptionField";s:1:"0";s:12:"rteForTeaser";s:1:"0";s:22:"contentElementRelation";s:1:"0";s:13:"manualSorting";s:1:"0";s:19:"categoryRestriction";s:0:"";s:34:"categoryBeGroupTceFormsRestriction";s:1:"0";s:6:"useFal";s:1:"1";s:12:"showImporter";s:1:"0";s:18:"storageUidImporter";s:1:"1";s:22:"resourceFolderImporter";s:12:"/news_import";s:24:"showAdministrationModule";s:1:"1";}',
            'realurl' => 'a:5:{s:10:"configFile";s:30:"typo3conf/realurl_autoconf.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:10:"moduleIcon";s:1:"1";}',
            'recycler' => 'a:0:{}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'rx_unrollsavebuttons' => 'a:1:{s:8:"iconOnly";s:1:"1";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'scheduler' => 'a:5:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";s:11:"useAtdaemon";s:1:"0";s:30:"listShowTaskDescriptionAsHover";s:1:"1";}',
            'mdtrade_package' => 'a:0:{}',
            'sourceopt' => 'a:0:{}',
            'version' => 'a:0:{}',
            'workspaces' => 'a:0:{}',
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'ro',
                'ru',
            ],
        ],
    ],
    'FE' => [
        'debug' => true,
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [
        'jpg_quality' => '80',
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => 1,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'MAIL' => [
        'defaultMailFromAddress' => 'no-reply@moldova-trade.com',
        'defaultMailFromName' => 'Moldova Trade',
        'transport' => 'smtp',
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i ',
        'transport_smtp_encrypt' => 'tls',
        'transport_smtp_password' => 'aStOIZLwp4bEXn9j',
        'transport_smtp_server' => 'smtp-relay.sendinblue.com:2525',
        'transport_smtp_username' => 'igodorogea@gmail.com',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\ApcuBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'enableDeprecationLog' => 'file',
        'encryptionKey' => '2e1d13ece30725fc553d1f1765ee607bffe9ea68b97a6415fba5da647fe740c4bc415b7ffc1b901d38004525c11f72e1',
        'exceptionalErrors' => 28674,
        'isInitialInstallationInProgress' => false,
        'sitename' => 'Moldova Trade',
        'sqlDebug' => 1,
        'systemLogLevel' => 0,
    ],
];
