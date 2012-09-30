<?php


	class Post{
		
		private $exists;
		private $text;
		private $title;
		private $subtitle;

		function __construct($title = "home"){
			
			if(file_exists("docs/$title.json")){
				$this->exists = true;	
			
				try{
					$file = fopen("docs/$title.json", "r");
					
					try{
						$data = fread($file, filesize("docs/$title.json"));
						$data = json_decode($data);
						$this->title = $data->title or $title;
						$this->subtitle = $data->subtitle;
						$this->text = $data->text;

					}catch(Exception  $e){
						echo "error reading the file...";
					}

				
				}catch(Exception $e){
					echo "could not read the file";
				}
			
			}else{
				$this->exists = false;
			}




		

		}


		public function exists(){
			return $this->exists;
		}

		public function title(){
			return $this->title;
		}

		public function subtitle(){
			return $this->subtitle;
		}

		public function body(){
			return $this->text;
		}
	
	}

?>
