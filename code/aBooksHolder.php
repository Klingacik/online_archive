<?php

class aBooksHolder extends Page {
	private static $has_many = array(
			'Books' => 'aBook'
	);
	
	public function getCMSFields() {	
		$fields = parent::getCMSFields();		//vrati fieldy z CMS
		$fields->addFieldToTab('Root.Books', GridField::create(
				'Books', 	//nazov
				'Books in the database',		//popis, ktory sa zobrazi v CMS ako titul gridfieldu
				$this->Books(),
				GridFieldConfig_RecordEditor::create()
				));
		return $fields;		
	}
}

class aBooksHolder_Controller extends Page_controller {
	public function index(SS_HTTPRequest $request)	{
		$books = aBook::get();
	
		if ($name = $request->getVar('Title'))	{
			$books = $books->filter(array(
					'Name:PartialMatch' => $name
			));
		}
		
		if($department = $request->getVar('Department'))	{
			$books = $books->filter(array(
					'Department:PartialMatch' => $department
			));
		}
		
		if($city = $request->getVar('City'))	{
			$books = $books->filter(array(
					'City:PartialMatch' => $city
			));
		}
		
		if($country = $request->getVar('Country'))	{
			$books = $books->filter(array(
					'Country:PartialMatch'	
			));
		}
		
		return array(
				'Results' => $books
		);
	}
	
	public function bookSearchForm()	{
		$form = Form::create(
				$this,
				'BooksSearchForm',
				FieldList::create(
						TextField::create('Title'),
						TextField::create('Department'),
						TextField::create('City'),
						TextField::create('Country')
						),
				FieldList::create(
						FormAction::create('doBooksSearch', 'Search')
						)
				)->addExtraClass('form-style');
				$form->setFormMethod('GET')
				->setFormAction($this->Link())
				->disableSecurityToken()	//upravi url vyhladavania, nebude tam zobrazovat nejace security id
				->loadDataFrom($this->request->getVars());		//aby ostalo vo vyhladavani to co sa zadalo
	
				return $form;
	}
}
?>