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
	
	private static $has_one = array(
			'PersonsHolder' => 'aPersonsHolder',
			'Photo' => 'Image'
	);
	
	private static $summary_fields = array(		//tieto stlpce mi potom zobrazi v gridfielde
			'ID' => 'ID',
			'FirstName' => 'Name',
			'Lastname' => 'Lastname'
	);
}

class aPerson_Controller extends ContentController {

}

?>