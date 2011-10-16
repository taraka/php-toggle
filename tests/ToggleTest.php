<?php 
require_once 'Base.php';

class ToggleTest extends Base
{
	public function testgetInstance()
	{
		$this->assertInstanceOf('\toggle\Toggle', \toggle\Toggle::getInstance());
	}
}