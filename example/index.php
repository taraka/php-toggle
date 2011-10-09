<?php 

include "../toggle/Toggle.inc.php";

if (\toggle\Toggle::getInstance()->check('test_toggle')) {
	echo 'Toggle on';
}
else {
	echo 'Toggle off';
}