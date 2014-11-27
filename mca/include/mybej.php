<?php

	function m($PARAM){
		$par = strtolower($PARAM);
		switch($par){
			case "head":
				get_template_part("include/structure/header");	break;

			case "foot":
				get_template_part("include/structure/footer");	break;
		}
	}


?>