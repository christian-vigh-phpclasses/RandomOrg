<?php
	/**************************************************************************************************************

	    getbytes.php -
		Echoes the number of random bytes specified by the $count variable.
	
	 **************************************************************************************************************/
	require ( 'examples.inc.php' ) ;

	$random		=  new RandomOrg ( $agent_string ) ;
	$count		=  10 ;
	$values		=  $random -> GetBytes ( $count ) ;

	echo ( "Getting $count random bytes :\n" ) ;
	echo ( "\t" . implode ( ', ', $values ) . "\n" ) ;

	display_statistics ( $random ) ;
