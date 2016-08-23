<?php
	/**************************************************************************************************************

	    getpasswords.php -
		Echoes the number of random-generated passwords specified by the $count variable.
		The passwords length is specified by the $length variable.
	
	 **************************************************************************************************************/
	require ( 'examples.inc.php' ) ;

	$random		=  new RandomOrg ( $agent_string ) ;
	$count		=  3 ;
	$length		=  19 ;

	$values		=  $random -> GetPasswords ( $count, $length ) ;

	echo ( "Getting $count random passwords of length $length :\n" ) ;
	echo ( "\t" . implode ( ', ', $values ) . "\n" ) ;

	display_statistics ( $random ) ;
