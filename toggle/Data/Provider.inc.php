<?php
namespace Toggle\Data;

/**
 * This is data provider interface for the toggle system.
 * 
 * @author tom
 */

interface Provider
{
	/**
	 * Get a data element by name
	 * 
	 * @param string $name
	 * @return Element
	 */
	public function getElement($name);
}