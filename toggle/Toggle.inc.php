<?php
namespace Toggle;

include_once 'Autoloader.inc.php';
Autoloader::register();

/**
 * This is the base toggle class currently implemented as a singleton but will be refactored later
 * 
 * @author tom
 */

class Toggle
{
	private static
		$_instance;
	
	private
		$_dataProvider;

	private function __construct()
	{
		$this->_dataProvider = new Data\Provider\File();
	}
	
	/**
	 * Checks if a named code path should be run and returns a boolean value
	 * 
	 * @param string $name
	 * @return bool
	 */
	public function check($name)
	{
		return $this->_dataProvider->getElement($name)->isGlobal();
	}
	
	/**
	 * Return the loaded instance of the toggle class if one is not loaded it attempts to load it.
	 * 
	 * @return Toggle
	 */
	public static function getInstance()
	{
		if (!isset(self::$_instance)) {
			self::$_instance = new Toggle();
		}
		
		return self::$_instance;
	}
}