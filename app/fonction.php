<?php 

	function age($date){
		$age= date('')-date('',strtotime($date));
		if (date('md') < date('md',strtotime($date))) {
			return $age-1;
		}
		return $age;
	}



 ?>