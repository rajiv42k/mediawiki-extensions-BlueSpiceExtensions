/**
 * PageTemplates extension
 *
 * @author     Stephan Muggli <muggli@hallowelt.biz>
 * @version    2.22.0
 * @package    Bluespice_Extensions
 * @subpackage PageTemplates
 * @copyright  Copyright (C) 2013 Hallo Welt! - Medienwerkstatt GmbH, All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License v2 or later
 * @filesource
 */

Ext.onReady( function(){
	Ext.create( 'BS.PageTemplates.Panel', {
		renderTo: 'bs-pagetemplates-grid'
	} );
} );