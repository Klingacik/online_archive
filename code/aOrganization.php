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

}

class aOrganization_Controller extends ContentController {

}

?>