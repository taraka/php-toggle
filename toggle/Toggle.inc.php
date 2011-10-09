<?php



class Toggle
{
	private static
		$_instance;
	
	private
		$_data;
		
	private function __construct()
	{
		
	}
	
	public function check($name)
	{
		
	}
	
	public static function getInstance()
	{
		if (!isset(self::$_instance)) {
			self::$_instance = new Toggle();
		}
		
		return self::$_instance;
	}
}