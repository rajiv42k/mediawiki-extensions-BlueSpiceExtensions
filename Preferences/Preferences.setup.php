<?php

BsExtensionManager::registerExtension('Preferences', BsRUNLEVEL::FULL|BsRUNLEVEL::REMOTE, BsACTION::LOAD_SPECIALPAGE);

$wgExtensionMessagesFiles['Preferences'] = __DIR__ . '/Preferences.i18n.php';

$aResourceModuleTemplate = array(
	'localBasePath' => 'extensions/BlueSpiceExtensions/Preferences/resources/',
	'remoteExtPath' => 'BlueSpiceExtensions/Preferences/resources'
);

$wgResourceModules['ext.bluespice.preferences'] = array(
	'scripts' => 'bluespice.preferences.js'
) + $aResourceModuleTemplate;

unset( $aResourceModuleTemplate );