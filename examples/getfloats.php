<?php
	/**************************************************************************************************************

	    getfloats.php -
		Echoes the number of random floats specified by the $count variable.
		The number of desired decimals is given by $decimals.
	
	 **************************************************************************************************************/
	require ( 'examples.inc.php' ) ;

	$random		=  new RandomOrg ( $agent_string ) ;
	$count		=  10 ;
	$decimals	=  3 ;
	$values		=  $random -> GetFloats ( $count, $decimals ) ;

	echo ( "Getting $count random float values with $decimals decimals :\n" ) ;
	echo ( "\t" . implode ( ', ', $values ) . "\n" ) ;

	display_statistics ( $random ) ;
