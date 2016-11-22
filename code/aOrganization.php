<?php
class aOrganization extends DataObject {

	private static $db = array(
		'Name' => 'Varchar',
		'Department' => 'Varchar',
		'City' => 'Varchar',
		'Country' => 'Varchar',
		'Address1' => 'Varchar',
		'Address2' => 'Varchar'
	);
	
	private static $has_one = array(
			'OrganizationsHolder' => 'aOrganizationsHolder'
	);
	
	private static $summary_fields = array(	
			'Name' => 'Name',
			'Department' => 'Department',
			'City' => 'City'
	);

}

class aOrganization_Controller extends ContentController {

}

?>