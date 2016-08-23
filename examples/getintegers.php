<?php
	/**************************************************************************************************************

	    getintegers.php -
		Echoes the number of integer values specified by the $count variable.
		The returned value will be between $min and $max for the first run, and will not use any range limit
		for the second one.
	
	 **************************************************************************************************************/
	require ( 'examples.inc.php' ) ;

	$random		=  new RandomOrg ( $agent_string ) ;
	$count		=  10 ;
	$min		=  1 ;
	$max		=  100 ;
	
	$values		=  $random -> GetIntegers ( $count, $min, $max ) ;

	echo ( "Getting $count random integer values between $min and $max :\n" ) ;
	echo ( "\t" . implode ( ', ', $values ) . "\n" ) ;

	display_statistics ( $random ) ;

	echo ( "\n" ) ;

	$values		=  $random -> GetIntegers ( $count ) ;

	echo ( "Getting $count random integer values without range limits :\n" ) ;
	echo ( "\t" . implode ( ', ', $values ) . "\n" ) ;

	display_statistics ( $random ) ;
