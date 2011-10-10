<?php
namespace Toggle\Data\Provider;

use Toggle\Data\Element;
use \Toggle\Data\Provider;

/**
 * This is data provider class for the toggle system. which uses files to load data
 * 
 * @author tom
 */

class File implements Provider
{
	private
		$_data;
		
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
			$this->_data = json_decode(file_get_contents($filename));
			if ($this->_data === null) {
				throw new \Exception('Unable to parse data file');
			}
		}
		else {
			throw new \Exception('Unable to load php-toggle data file');
		}
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Toggle\Data.Provider::getElement()
	 */
	public function getElement($name)
	{
		$element = new Element();
		
		if (isset($this->_data->$name))
		{
			$data = $this->_data->$name;
			
			if (isset($data->global)) {
				$element->setGlobal($data->global);
			}
		}
		
		return $element;
	}
}