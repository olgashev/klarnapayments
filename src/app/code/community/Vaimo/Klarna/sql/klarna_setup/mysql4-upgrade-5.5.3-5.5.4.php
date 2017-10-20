<?php

$installer = $this;
$installer->startSetup();

/*
 * Changing this setting to 1 is the opposite of what SUPEE-9767 was about
 * therefore commenting this line for version 5.5.6
 */
//$installer->setConfigData('dev/template/allow_symlink', '1');

$installer->endSetup();
