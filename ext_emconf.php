<?php

########################################################################
# Extension Manager/Repository config file for ext "less".
#
# Auto generated 09-03-2012 10:37
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
    'title' => 'DynCss - SCSS Parser (based on Leafo SCSS-Parser v0.7.5)',
    'description' => 'DynCss-Parser',
    'category' => 'fe',
    'version' => '1.3.0',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 0,
    'author' => 'Kay Strobach',
    'author_email' => 'kay.strobach@typo3.org',
    'author_company' => '',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => array(
        'depends' => array(
            'dyncss' => '0.8.0-0.9.99',
            'typo3'  => '7.6.15-9.5.99'
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
    '_md5_values_when_last_written' => 'a:11:{s:9:"ChangeLog";s:4:"dfaa";s:10:"README.txt";s:4:"ee2d";s:21:"ext_conf_template.txt";s:4:"1cbe";s:12:"ext_icon.gif";s:4:"6c2c";s:17:"ext_localconf.php";s:4:"e47e";s:28:"ext_typoscript_constants.txt";s:4:"f81f";s:24:"ext_typoscript_setup.txt";s:4:"e8b6";s:13:"locallang.xml";s:4:"13b4";s:23:"lib/lessc-0.2.0.inc.php";s:4:"efef";s:23:"lib/lessc-0.3.3.inc.php";s:4:"e18e";s:25:"pi1/class.tx_less_pi1.php";s:4:"6db7";}',
);
