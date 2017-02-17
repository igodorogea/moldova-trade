<?php
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'] = array(
    '_DEFAULT' =>
        array(
            'init' =>
                array(
                    'enableCHashCache' => true,
                    'appendMissingSlash' => 'ifNotFile,redirect',
                    'adminJumpToBackend' => true,
                    'enableUrlDecodeCache' => true,
                    'enableUrlEncodeCache' => true,
                    'emptyUrlReturnValue' => 'https://moldova-trade-igodorogea.c9users.io/',
                ),
            'pagePath' =>
                array(
                    'type' => 'user',
                    'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
                    'spaceCharacter' => '-',
                    'languageGetVar' => 'L',
                    'rootpage_id' => '1',
                ),
            'fileName' =>
                array(
                    'defaultToHTMLsuffixOnPrev' => 0,
                    'acceptHTMLsuffix' => 1,
                    'index' =>
                        array(
                            'print' =>
                                array(
                                    'keyValues' =>
                                        array(
                                            'type' => 98,
                                        ),
                                ),
                        ),
                ),
            'preVars' =>
                array(
                    0 =>
                        array(
                            'GETvar' => 'no_cache',
                            'valueMap' =>
                                array(
                                    'nc' => '1',
                                ),
                            'noMatch' => 'bypass',
                        ),
                    1 =>
                        array(
                            'GETvar' => 'L',
                            'valueMap' =>
                                array(
                                    'ro' => '1',
                                    'ru' => '2',
                                ),
                            'noMatch' => 'bypass',
                        ),
                ),
            'postVarSets' =>
                array(
                    '_DEFAULT' =>
                        array(
                            'news' =>
                                array(
                                    0 =>
                                        array(
                                            'GETvar' => 'tx_news_pi1[news]',
                                            'lookUpTable' =>
                                                array(
                                                    'table' => 'tx_news_domain_model_news',
                                                    'id_field' => 'uid',
                                                    'alias_field' => 'title',
                                                    'useUniqueCache' => 1,
                                                    'useUniqueCache_conf' =>
                                                        array(
                                                            'strtolower' => 1,
                                                            'spaceCharacter' => '-',
                                                        ),
                                                ),
                                        ),
                                ),
                            'page' =>
                                array(
                                    0 =>
                                        array(
                                            'GETvar' => 'page',
                                        ),
                                ),
                        ),
                ),
        ),
);
