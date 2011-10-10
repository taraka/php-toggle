<?php
namespace Toggle\Data;

/**
 * Representation of an invividual element
 * 
 * @author tom
 */

class Element
{
	private
		$_global = false;
	
	/**
	 * Sets the elements global flag
	 * 
	 * @param bool $global
	 * @return void
	 */
	public function setGlobal($global=true)
	{
		$this->_global = (bool)$global;
	}
		
	/**
	 * checks the elements global flag
	 * 
	 * @return bool
	 */
	public function isGlobal()
	{
		return (bool)$this->_global;
	}
}