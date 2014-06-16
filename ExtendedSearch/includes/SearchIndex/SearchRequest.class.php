<?php
/**
 * Processes search request for ExtendedSearch for MediaWiki
 *
 * Part of BlueSpice for MediaWiki
 *
 * @author     Mathias Scheer <scheer@hallowelt.biz>
 * @author     Markus Glaser <glaser@hallowelt.biz>
 * @author     Stephan Muggli <muggli@hallowelt.biz>
 * @package    BlueSpice_Extensions
 * @subpackage ExtendedSearch
 * @copyright  Copyright (C) 2010 Hallo Welt! - Medienwerkstatt GmbH, All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License v2 or later
 * @filesource
 */
/* Changelog
 * v0.1
 * FIRST CHANGES
 */
/**
 * Processes search request for ExtendedSearch for MediaWiki
 * @package BlueSpice_Extensions
 * @subpackage ExtendedSearch
 */
class SearchRequest {

	/**
	 * Request Context
	 * @var $oRequest WebRequest object
	 */
	protected $oRequest;
	/**
	 * Instance of search service
	 * @var object of search service
	 */
	protected static $oInstance = null;

	/**
	 * Cosntructor for SearchRequestMW class
	 * @param BsSearchRequest $instanceToDecorate Object to extend with additional functionality
	 */
	public function __construct() {
		wfProfileIn( 'BS::'.__METHOD__ );
		$this->oRequest = RequestContext::getMain()->getRequest();
		$this->setDefaults();
		$this->processSettings();
		$this->processInputs();
		wfProfileOut( 'BS::'.__METHOD__ );
	}

	/**
	 * Return a instance of SearchRequest.
	 * @return SearchRequest Instance of SearchRequest
	 */
	public static function getInstance() {
		wfProfileIn( 'BS::'.__METHOD__ );
		if ( self::$oInstance === null ) {
			self::$oInstance = new self();
		}

		wfProfileOut( 'BS::'.__METHOD__ );
		return self::$oInstance;
	}

	/**
	 * Sets the defaults for a search request.
	 */
	protected function setDefaults() {
		wfProfileIn( 'BS::'.__METHOD__ );
		$this->sOrder = 'score';
		$this->sAsc = 'desc';
		$this->iOffset = 0;
		$this->sFormat = 'html';
		$this->bSearchFiles = false;
		wfProfileOut( 'BS::'.__METHOD__ );
	}

	/**
	 * Get values from settings
	 */
	protected function processSettings() {
		wfProfileIn( 'BS::'.__METHOD__ );
		$this->sDefaultFuzziness = BsConfig::get( 'MW::ExtendedSearch::DefFuzziness' );
		$this->sHighlightSnippets = BsConfig::get( 'MW::ExtendedSearch::HighlightSnippets' );
		$this->bLogUsers = BsConfig::get( 'MW::ExtendedSearch::LogUsers' );
		$this->bLogging = BsConfig::get( 'MW::ExtendedSearch::Logging' );
		$this->iMaxDocSize = ( BsConfig::get( 'MW::ExtendedSearch::MaxDocSizeMB', 10 ) * 1024 * 1024 );
		wfProfileOut( 'BS::'.__METHOD__ );
	}

	/**
	 * Get values from url parameters
	 */
	protected function processInputs() {
		$this->sScope = $this->oRequest->getVal( 'search_scope' );
		$this->sOrigin = $this->oRequest->getVal( 'search_origin' );
		$this->sOperator = $this->oRequest->getVal( 'op' );
		$this->sAsc = $this->oRequest->getVal( 'search_asc', $this->sAsc );
		$this->iOffset = $this->oRequest->getVal( 'search_offset', $this->iOffset ); // todo: type is int??
		$this->sOrder = $this->oRequest->getVal( 'search_order', $this->sOrder );
		$this->sFormat = $this->oRequest->getVal( 'search_format', $this->sFormat );
		$this->sId = $this->oRequest->getVal( 'search_id', false );
		$this->sInput = $this->oRequest->getVal( 'search_input', false );
		$this->sHidden = $this->oRequest->getVal( 'search_hidden' );
		$this->sSearchAsYouType = $this->oRequest->getVal( 'searchasyoutype' );
		$this->bExtendedForm = $this->oRequest->getFuzzyBool( 'search_extended', false );
		$this->bAutocomplete = $this->oRequest->getFuzzyBool( 'autocomplete', false );
		$this->sEditor = $this->oRequest->getArray( 'ed', array() );
		$this->sCategories = $this->oRequest->getArray( 'ca', array() );
		$this->aNamespaces = $this->oRequest->getArray( 'na', array() );
		$this->aType = $this->oRequest->getArray( 'ty', array() );

		if ( $this->oRequest->getInt( 'search_files' ) !== 0 ) {
			if ( $this->sOrigin !== 'ajax' ) {
				if ( $this->oRequest->getInt( 'search_files' ) === 1 ) {
					$this->bSearchFiles = true;
				} else {
					$this->bSearchFiles = false;
				}
			}
		}

		if ( !$this->sScope ) {
			$this->sScope = BsConfig::get( 'MW::ExtendedSearch::DefScopeUser' );
		}

		wfRunHooks( 'BSExtendedSearchRequestProcessInputs', array( &$this ) );
	}

	/**
	 * Can we actually commit a search?
	 * @return bool True if yes.
	 */
	public function isSearchable() {
		$input  = $this->sInput; // take care:  empty( $this->sInput ) does not work 'cause of getter magic method
		return (bool)( !empty( $input ) );
	}

}