<?php
function is_on_demo_host()
{
	if ( isset($_SERVER['CI_DEMO']))
	{
		return $_SERVER['CI_DEMO'];
	}
	
	return isset($_SERVER['HTTP_HOST']) && ($_SERVER['HTTP_HOST'] == 'demo.amztechnology.com' || $_SERVER['HTTP_HOST'] == 'demo.netstartposv21staging.com');
}
?>