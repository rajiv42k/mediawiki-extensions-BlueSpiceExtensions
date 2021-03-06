<?php

BsExtensionManager::registerExtension( 'UserSidebar', BsRUNLEVEL::FULL|BsRUNLEVEL::REMOTE );

$GLOBALS['wgAutoloadClasses']['UserSidebar'] = __DIR__ . '/UserSidebar.class.php';

$wgMessagesDirs['UserSidebar'] = __DIR__ . '/i18n';

$wgExtensionMessagesFiles['UserSidebar'] = __DIR__ . '/languages/UserSidebar.i18n.php';

$wgAutoloadClasses['ApiSidebar'] = __DIR__ . '/api/ApiSidebar.php';

$aResourceModuleTemplate = array(
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'BlueSpiceExtensions/UserSidebar'
);

$wgResourceModules['ext.bluespice.usersidebar'] = array(
	'scripts'  => 'resources/bluespice.userSidebar.js'
) + $aResourceModuleTemplate;