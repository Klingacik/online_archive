<?php
class aHomePage extends Page
{
	/*private static $db = array(
		'titleImage' => 'Image' 
	);*/
	
	private static $has_one = array(
		'TitleImage' => 'Image'
	);

	public function getCMSFields() {
    	$fields = parent::getCMSFields();
    	$fields->addFieldToTab('Root.Attachments', UploadField::create('TitleImage', 'Title image of home page'));

    	return $fields;
    }
}
/*$person = aPerson::create()->write();
echo $person;*/
/* $author = aAuthor::create(array('Role' => 'A', 
								aPerson::create(array('FirstName' => 'Peter', 'Lastname' => 'Franta')
												)
								)
						);
$author->write();
$author = aAuthor::create()->write();
echo $author->ID; */

class aHomePage_Controller extends Page_Controller {

	public function latestArticles($count = 6)
	{
		return aPaper::get()
					  ->sort('Created', 'DESC')
					  ->limit($count);
	}

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
					'Country:PartialMatch' => $country	
			));
		}
		
		$paginatedBooks = PaginatedList::create(
			$books,
			$request
		)->setPageLength(10)
		 ->setPaginationGetVar('s');

		$data = array(
				'Results' => $paginatedBooks
		);

		if($request->isAjax())	{
			return $this->customise($data)->renderWith('aHomePage');
		}

		return $data;
	}


	public function bookSearchForm()	{
		$form = Form::create(
				$this,
				'BooksSearchForm',
				FieldList::create(
						TextField::create('Title'),//->addExtraClass('form-control'),
						TextField::create('Department'),//->addExtraClass('form-control'),
						TextField::create('City'),//->addExtraClass('form-control'),
						TextField::create('Country')//->addExtraClass('form-control')
						),
				FieldList::create(
						FormAction::create('doBooksSearch', 'Search')->addExtraClass('form-inline')
						)
				)->addExtraClass('form-control');
				$form->setFormMethod('GET')
				->setFormAction($this->Link())
				->disableSecurityToken()	//upravi url vyhladavania, nebude tam zobrazovat nejace security id
				->loadDataFrom($this->request->getVars());		//aby ostalo vo vyhladavani to co sa zadalo
	
				return $form;
	}
}

?>