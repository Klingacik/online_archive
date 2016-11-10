<?php

class aAuthorsHolder extends Page {
	private static $has_many = array(
			'Authors' => 'aAuthor'
	);	
	
	public function getCMSFiels()	{
		$fields = parent::getCMSFields();		//vrati fieldy z CMS
		$fields->addFieldToTab('Root.Authors', GridField::create(
				'Authors', 	//nazov
				'Authors in the database',		//popis, ktory sa zobrazi v CMS ako titul gridfieldu
				$this->Authors(),
				GridFieldConfig_RecordEditor::create()
				));
		return $fields;
	}
}

class aAuthorsHolder_Controller extends Page_controller {
	
}

?>