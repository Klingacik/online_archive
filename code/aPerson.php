<?php
class aPerson extends DataObject {

	private static $db = array(
		'FirstName' => 'Varchar',
		'Middlename' => 'Varchar',
		'Lastname' => 'Varchar',
		'Title_before' => 'Varchar',
		'Title_after' => 'Varchar'
	);

	private static $has_many = array(
		'Emails' => 'aEmail'
	);
}

class aPerson_Controller extends ContentController {

}

?>