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
	
	private static $summary_fields = array(		//tieto stlpce mi potom zobrazi v gridfielde
			'Person.FirstName' => 'FirstName',
			'Person.Middlename' => 'Middlename',
			'Person.Lastname' => 'Lastname'
	);
	
	public function Link() {
		return $this->AuthorsHolder()->Link('show/'.$this->ID);
	}
	
	public function LinkingMode() {
		return Controller::curr()->getRequest()->param('ID') == $this->ID ? 'current' : 'link';
	}
}

class aAuthor_Controller extends ContentController {
		
}

?>