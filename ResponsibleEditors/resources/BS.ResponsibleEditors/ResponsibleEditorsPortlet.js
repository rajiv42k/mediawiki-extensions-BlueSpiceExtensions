/**
 * ExtendedSearch extension
 *
 * @author     Stephan Muggli <muggli@hallowelt.com>
 * @version    2.22.0
 * @package    Bluespice_Extensions
 * @subpackage ResponsibleEditors
 * @copyright  Copyright (C) 2016 Hallo Welt! GmbH, All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License v2 or later
 * @filesource
 */

Ext.define( 'BS.ResponsibleEditors.ResponsibleEditorsPortlet', {
	extend: 'BS.portal.HTMLPortlet',
	portletConfigClass: 'BS.ResponsibleEditors.ResponsibleEditorsPortletConfig',

	initComponent: function() {
		this.contentUrl = bs.util.getAjaxDispatcherUrl( 'ResponsibleEditors::getResponsibleEditorsPortletData', [ this.portletItemCount, mw.config.get( "wgUserId" ) ] );
		this.callParent(arguments);
	},

	setPortletConfig: function( cfg ) {
		this.callParent(arguments);
		this.cContent.getLoader().load({
			url: bs.util.getAjaxDispatcherUrl( 'ResponsibleEditors::getResponsibleEditorsPortletData', [ this.portletItemCount, mw.config.get( "wgUserId" ) ] )
		});
	}
} );