<?php
class aEmail extends DataObject {

	private static $db = array(
		'Email' => 'Varchar',
		'Main_email' => 'Enum(array("Y","N"))'
	);

	private static $has_one = array(
		'Owner' => 'aPerson'
	);
}

class aEmail_Controller extends ContentController {

}
?>