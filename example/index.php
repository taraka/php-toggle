<?php 

include '../toggle/Toggle.inc.php';
use Toggle\Toggle;

if (Toggle::getInstance()->check('test_toggle')) {
	echo 'Toggle on';
}
else {
	echo 'Toggle off';
}