<?php
namespace Toggle\Data\Provider;

use \Toggle\Data\Provider;

/**
 * This is data provider class for the toggle system. which uses files to load data
 * 
 * @author tom
 */

class File implements Provider
{
	private
		$_flags;
		
	public function __construct()
	{
		$this->load();
	}
		
	/**
	 * Loads the data file
	 * 
	 * @param string $filename
	 * @return void
	 */
	private function load($filename='data.json')
	{
		if (file_exists($filename))
		{
			$this->_flags = json_decode(file_get_contents($filename));
			if ($this->_flags === null) {
				throw new \Exception('Unable to parse data file');
			}
		}
		else {
			throw new \Exception('Unable to load php-toggle data file');
		}
	}
	
	/**
	 * Checks if a named code path should be run and returns a boolean value
	 * 
	 * @param string $name
	 * @return bool
	 */
	public function check($name)
	{
		return isset($this->_flags->$name);
	}
}