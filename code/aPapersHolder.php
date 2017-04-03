<?php

	class aPapersHolder extends Page	{
		
		private static $has_many = array(
				'Papers' => 'aPaper'
		);
		
		public function getCMSFields() {
			$fields = parent::getCMSFields();		//vrati fieldy z CMS
			$fields->addFieldToTab('Root.Main', TextareaField::create('Content'));
			$fields->addFieldToTab('Root.Papers', GridField::create(
					'Papers', 	//nazov
					'Papers in the database',		//popis, ktory sa zobrazi v CMS ako titul gridfieldu
					$this->Papers(),
					GridFieldConfig_RecordEditor::create()
					));
			return $fields;
		}
	}
	
	class aPapersHolder_Controller extends Page_controller {
	
		private static $allowed_actions = array (
				'show'
		);
	
		public function show(SS_HTTPRequest $request)	{
			$papers = aPaper::get()->byID($request->param('ID'));
	
			if(!$papers)	{
				return $this->httpError(404, 'That paper could not be found!');
			}
	
			return array(
					'aPaper' => $papers
			);
		}
	}
?>