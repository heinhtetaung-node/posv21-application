<?php
require_once ("Datacaptranscloudprocessor.php");
class Mercuryemvtranscloudprocessor extends Datacaptranscloudprocessor
{	
	function __construct($controller)
	{		
		$settings = array(
			'username' => 'netstartposv21',
			'password' => '817C831F-62D1-42de',
		);
		
		parent::__construct($controller,$settings);				
	}	
}