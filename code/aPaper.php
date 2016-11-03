<?php
class aPaper extends DataObject {

	private static $db = array(
			'Title' => 'Int',
			'Subtitle' => 'Varchar',
			'Doi' => 'Varchar',
			'Page_start' => 'Int',
			'Page_end' => 'Int',
			'Abstract' => 'Varchar',
			'Keywords' => 'Varchar',
			'DatePublished' => 'Date'
	);
	
	private static $has_one = array(
			'Author' => 'aAuthor'
	);
	
	private static $has_many = array(
			'References' => 'aReference'
	);
}

class aPaper_Controller extends ContentController {

}
?>