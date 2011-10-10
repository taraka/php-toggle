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
	 * Checks if a named code path should be run and returns a boolean value
	 * 
	 * @param string $name
	 * @return bool
	 */
	public function check($name);
}