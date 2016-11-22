<?php

class aAuthorsHolder extends Page {
	private static $has_many = array(
			'Authors' => 'aAuthor'
	);

	public function getCMSFields() {
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
	
	private static $allowed_actions = array (
			'show'
	);
	
	public function show(SS_HTTPRequest $request)	{
		$authors = aAuthor::get()->byID($request->param('ID'));
	
		if(!$authors)	{
			return $this->httpError(404, 'That author could not be found!');
		}
	
		return array(
				'aAuthor' => $authors
		);
	}
}

?>