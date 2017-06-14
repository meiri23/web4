<?php 
	/**
	* 
	*/
	class view
	{
		public $title;
		public $subtitle;
		public $content;

		function __construct()
		{
			include_once 'template/header.php';
			include_once 'template/sidebar.php';
		}
		protected function end(){
			include 'template/footer.php';
		}

	}
 ?>