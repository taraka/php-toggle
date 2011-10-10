<?php
namespace Toggle;

/**
 * This is the toggle auto loader
 * 
 * @author tom
 */

class Autoloader
{
	public static function register()
	{
		spl_autoload_register(array(__NAMESPACE__ .'\Autoloader', 'autoload'), true);
	}
	
	public static function autoload($classname)
	{
		if (substr($classname, 0, 7) != 'Toggle\\') {
			return false;
		}
		
		require_once(dirname(__FILE__) . substr(str_replace('\\', '/', $classname), 6) . '.inc.php');
	}
}