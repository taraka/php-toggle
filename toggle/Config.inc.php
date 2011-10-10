<?php
namespace Toggle;

/**
 * This is the toggle config provider
 * 
 * @author tom
 */

class Config
{
	private static
		$_instance;
		
	private
		$_values=array();
		
	public function __construct()
	{
		$this->initValues();
	}
	
	/**
	 * Load the config file in to the values
	 */
	private function initValues()
	{
		$filepath = dirname(__FILE__) . '/Config/toggle.ini';
		
		if (file_exists($filepath)) {
			if (($this->_values = parse_ini_file($filepath)) === false) {
				throw new \Exception('Unable to parse Toggle config file.');
			}
		}
		else {
			throw new \Exception('Toggle config file not found.');
		}
	}
	
	/**
	 * Gets a value from the config
	 * 
	 * @param string $name
	 * @return mixed
	 */
	public function get($name)
	{
		if (isset($this->_values[$name])) {
			return $this->_values[$name];
		}
	}
	
	/**
	 * Return the loaded instance of the toggle config class if one is not loaded it attempts to load it.
	 * 
	 * @return Toggle
	 */
	public static function getInstance()
	{
		if (!isset(self::$_instance)) {
			self::$_instance = new Config();
		}
		
		return self::$_instance;
	}
}