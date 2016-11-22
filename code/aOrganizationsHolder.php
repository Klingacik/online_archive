<?php
class aOrganizationsHolder extends Page {
	private static $has_many = array(
			'Organizations' => 'aOrganization'
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();		//vrati fieldy z CMS
		$fields->addFieldToTab('Root.Organizations', GridField::create(
				'Organizations', 	//nazov
				'Organizations in the database',		//popis, ktory sa zobrazi v CMS ako titul gridfieldu
				$this->Organizations(),
				GridFieldConfig_RecordEditor::create()
				));
		return $fields;
	}
}

class aOrganizationsHolder_Controller extends Page_controller {

}

?>