<?php
namespace Toggle;

/**
 * This is the toggle auto loader
 * 
 * @author tom
 */

class Autoloader
{
	private static $_registered=false;
	
	/**
	 * Registers the toggle autoloader
	 * 
	 * @return void;
	 */
	public static function register()
	{
		if (!self::$_registered)
		{
			spl_autoload_register(array(__NAMESPACE__ .'\Autoloader', 'autoload'), true);
			$_registered = true;
		}
	}
	
	/**
	 * Toggle class autoloader
	 * 
	 * @param string $classname
	 */
	public static function autoload($classname)
	{
		if (substr($classname, 0, 7) != 'Toggle\\') {
			return false;
		}
		
		$filepath = dirname(__FILE__) . substr(str_replace('\\', '/', $classname), 6) . '.inc.php';
		
		if (file_exists($filepath)) {
			require_once($filepath);
		}
	}
}