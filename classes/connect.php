<?php
	/**
	* 
	*/
	class connection 
	{
		
		function __construct()
		{

			$this -> connect();
		}

		public fucntion connect(){
			mysql_connect('localhost','root','lumas');
		}
	}
?>