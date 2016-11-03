<?php
class aAuthor extends DataObject {

	private static $db = array(
			'Role' => 'Enum(array("A","C"))' //author or co-author	
	);
	
	private static $has_one = array(
			'Person' => 'aPerson',
			'Organization' => 'aOrganization'
	);
	
	private static $has_many = array(
			'Papers' => 'aPaper'
	);
}

class aAuthor_Controller extends ContentController {

}
?>