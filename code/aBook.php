<?php
class aBook extends DataObject {
	private static $db = array(
			'Name' => 'Varchar',
			'Department' => 'Varchar',
			'City' => 'Varchar',
			'Country' => 'Varchar',
			'Address1' => 'Varchar',
			'Address2' => 'Varchar'
	);
}

class aBook_Controller extends ContentController {

}

?>