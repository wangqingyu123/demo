<?php 

class test{
	
	const MIN_VALUE = 0.0;
	
	
	function __construct(){
		
		$redis = new redis();
		
		//range(1,10) = self::BUG;
				
		var_dump(self::MIN_VALUE);
		
	}
	
	
	
	
	
	
}

$t =new test();


