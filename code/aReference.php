<?php

class aReference extends DataObject {
	private static $db = array(
			'Title' => 'Varchar',
			'Authors' => 'Varchar',
			'Year' => 'Int',
			'Volume' => 'Int',
			'Issue' => 'Int',
			'Issn' => 'Varchar',
			'Isbn' => 'Varchar',
			'Doi' => 'Varchar',
			'Pages' => 'Varchar',
			'Source' => 'Varchar',
			'Place' => 'Varchar'
	);
	
	private static $has_one = array(
			'Paper' => 'aPaper'
	);
}

class aReference_Controller extends ContentController {

}
?>