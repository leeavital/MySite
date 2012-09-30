<?php


	class Post{
		
		private $exists;
		private $text;
		
		function __construct($title = "home"){
			
			if(file_exists("docs/$title.json")){
				$this->exists = true;	
			}else{
				$this->exists = false;
			}


		

		}


		function exists(){
			return $this->exists;
		}
	
	}

?>
