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
	
	private static $allowed_actions = array(
			'show'
	);
	
	public function show(SS_HTTPRequest $request)	{
		$book = aBook::get()->byID($request->param('ID'));
		
		if(!$book)	{
			return $this->httpError(404, 'No book has been found!');
		}
		
		return array(
				'aBook' => $book
		);
	}
	
	public function index(SS_HTTPRequest $request)	{
		$books = aBook::get();
	
		if ($name = $request->getVar('Title'))		{
			$books = $books->filter(array(
					'Name:PartialMatch' => $name
			));
		}
		
		if($author = $request->getVar('Author'))	{
			$books = $books->filter(array(
				'Author.Person.Firstname' => $author	
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
						TextField::create('Author'),
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