<?php
class aBook extends DataObject {
	private static $db = array(
			'Name' => 'Varchar',
			'Department' => 'Varchar',
			'City' => 'Varchar',
			'Country' => 'Varchar',
			'Address1' => 'Varchar',
			'Address2' => 'Varchar'
	);
	
	private static $belongs_many_many = array(
			'Authors' => 'aAuthor'
	);
	
	private static $has_one = array(
			'BooksHolder' => 'aBooksHolder'
	);

	private static $summary_fields = array(		//tieto stlpce mi potom zobrazi v gridfielde
			'Name' => 'Title of the book',
			'Department' => 'Department',
			'City' => 'City'
	);
}

class aBook_Controller extends ContentController {
	
}

?>