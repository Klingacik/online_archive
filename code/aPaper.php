<?php
class aPaper extends DataObject {

	private static $db = array(
			'Title' => 'Varchar',
			'Subtitle' => 'Varchar',
			'Doi' => 'Varchar',
			'Page_start' => 'Int',
			'Page_end' => 'Int',
			'Abstract' => 'Varchar',
			'Content' => 'Varchar',
			'Keywords' => 'Varchar',
			'DatePublished' => 'Date'
	);
	
	private static $has_one = array(
			'Author' => 'aAuthor',
			'Book' => 'aBook',
			'PapersHolder' => 'aPapersHolder'
	);
	
	private static $has_many = array(
			'References' => 'aReference'
	);
	
	private static $summary_fields = array(		//tieto stlpce mi potom zobrazi v gridfielde
			'Title' => 'Title',
			'Subtitle' => 'Subtitle',
			'DatePublished' => 'Date published'
	);
	
	public function Link() {
		return $this->PapersHolder()->Link('show/'.$this->ID);
	}
	
	public function LinkingMode() {
		return Controller::curr()->getRequest()->param('ID') == $this->ID ? 'current' : 'link';
	}
}

class aPaper_Controller extends ContentController {
	
}

?>