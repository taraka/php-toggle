<?php 

include '../toggle/Toggle.inc.php';

if (\Toggle\Toggle::getInstance()->check('test_toggle')) {
	echo 'Toggle on';
}
else {
	echo 'Toggle off';
}