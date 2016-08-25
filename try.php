<?php
	function inverse($b){
		if(!$b){
			 throw new Exception('Division by zero!');
		}
		return 1/$b;
	} 

	try{
		echo "res = ".inverse(0);
	}catch(Exception $e){
		echo $e->getMessage()."<br>";

	}
	echo "Next code!";
?>