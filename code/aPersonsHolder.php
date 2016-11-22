<?php

class aPersonsHolder extends Page {
	private static $has_many = array(
			'Persons' => 'aPerson'
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();		//vrati fieldy z CMS
		$fields->addFieldToTab('Root.Persons', GridField::create(
				'Persons', 	//nazov
				'Persons in the database',		//popis, ktory sa zobrazi v CMS ako titul gridfieldu
				$this->Persons(),
				GridFieldConfig_RecordEditor::create()
				));
		return $fields;
	}
}

class aPersonsHolder_Controller extends Page_controller {

}

?>