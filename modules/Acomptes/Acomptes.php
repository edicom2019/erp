<?php
/* +**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * Contributor(s): YetiForce.com
 * ********************************************************************************** */

include_once 'modules/Vtiger/CRMEntity.php';

class Acomptes extends Vtiger_CRMEntity
{
	public $table_name = 'u_yf_acomptes';
	public $table_index = 'acomptesid';

	/**
	 * Mandatory table for supporting custom fields.
	 */
	public $customFieldTable = ['u_yf_acomptescf', 'acomptesid'];

	/**
	 * Mandatory for Saving, Include tables related to this module.
	 */
	public $tab_name = ['vtiger_crmentity', 'u_yf_acomptes', 'u_yf_acomptescf'];

	/**
	 * Mandatory for Saving, Include tablename and tablekey columnname here.
	 */
	public $tab_name_index = [
		'vtiger_crmentity' => 'crmid',
		'u_yf_acomptes' => 'acomptesid',
		'u_yf_acomptescf' => 'acomptesid',
	];

	/**
	 * Mandatory for Listing (Related listview).
	 */
	public $list_fields = [
		// Format: Field Label => Array(tablename, columnname)
		'Acomptes' => ['acomptes', 'acomptes'],
		'Assigned To' => ['crmentity', 'smownerid'],
	];
	public $list_fields_name = [
		// Format: Field Label => fieldname
		'Acomptes' => 'acomptes',
		'Assigned To' => 'assigned_user_id',
	];
	// Make the field link to detail view
	public $list_link_field = 'acomptes';
	// For Popup listview and UI type support
	public $search_fields = [
		// Format: Field Label => Array(tablename, columnname)
		'Acomptes' => ['acomptes', 'acomptes'],
		'Assigned To' => ['vtiger_crmentity', 'assigned_user_id'],
	];
	public $search_fields_name = [
		// Format: Field Label => fieldname
		'Acomptes' => 'acomptes',
		'Assigned To' => 'assigned_user_id',
	];
	// For Popup window record selection
	public $popup_fields = ['acomptes'];
	// For Alphabetical search
	public $def_basicsearch_col = 'acomptes';
	// Column value to use on detail view record text display
	public $def_detailview_recname = 'acomptes';
	// Used when enabling/disabling the mandatory fields for the module.
	// Refers to vtiger_field.fieldname values.
	public $mandatory_fields = [/*'acomptes', 'assigned_user_id'*/];
	public $default_order_by = '';
	public $default_sort_order = 'ASC';

	/**
	 * Invoked when special actions are performed on the module.
	 *
	 * @param string Module name
	 * @param string Event Type
	 */
	public function moduleHandler($moduleName, $eventType)
	{
		if ($eventType === 'module.postinstall') {
		} elseif ($eventType === 'module.disabled') {
		} elseif ($eventType === 'module.preuninstall') {
		} elseif ($eventType === 'module.preupdate') {
		} elseif ($eventType === 'module.postupdate') {
		}
	}
}
