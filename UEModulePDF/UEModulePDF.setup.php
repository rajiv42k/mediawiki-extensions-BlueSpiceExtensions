<?php

BsExtensionManager::registerExtension( 'UEModulePDF', BsRUNLEVEL::FULL|BsRUNLEVEL::REMOTE, BsACTION::LOAD_SPECIALPAGE );

/**
 * Allows modification for CURL request. E.g. setting an CA file for HTTPS
 */
$bsgUEModulePDFCURLOptions = array();

/**
 * This value is considered when asseta are being uploaded to the PDF service
 */
$bsgUEModulePDFUploadThreshold = 50 * 1024 * 1024;

$wgMessagesDirs['UEModulePDF'] = __DIR__ . '/i18n';

$wgExtensionMessagesFiles['UEModulePDF'] = __DIR__ . '/languages/UEModulePDF.i18n.php';

$GLOBALS['wgAutoloadClasses']['UEModulePDF'] = __DIR__ . '/UEModulePDF.class.php';
$wgAutoloadClasses['BsPDFPageProvider'] = __DIR__ . '/includes/PDFPageProvider.class.php';
$wgAutoloadClasses['BsPDFTemplateProvider'] = __DIR__ . '/includes/PDFTemplateProvider.class.php';
$wgAutoloadClasses['BsPDFWebService'] = __DIR__ . '/includes/PDFWebService.class.php';
$wgAutoloadClasses['BsPDFServlet'] = __DIR__ . '/includes/PDFServlet.class.php'; //TODO: This is deprecated. Remove.
$wgAutoloadClasses['BsExportModulePDF'] = __DIR__ . '/includes/ExportModulePDF.class.php';

$wgHooks['LoadExtensionSchemaUpdates'][] = 'UEModulePDF::getSchemaUpdates';

// Remove if minimal system requirements of MW changes to PHP <= 5.5
if( !defined( 'CURLOPT_SAFE_UPLOAD' ) ) {
	define( 'CURLOPT_SAFE_UPLOAD', -1 );
}
