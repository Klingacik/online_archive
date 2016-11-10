<?php
class aAuthor extends DataObject {

	private static $db = array(
			'Role' => 'Enum(array("A","C"))' //author or co-author
	);
	
	private static $has_one = array(
			'Person' => 'aPerson',
			'Organization' => 'aOrganization',
			'AuthorsHolder' => 'aAuthorsHolder'
	);
	
	private static $has_many = array(
			'Papers' => 'aPaper'
	);
	
	private static $many_many = array(
			'Books' => 'aBook'
	);	
}

class aAuthor_Controller extends ContentController {

}
?>