<?php
	/**************************************************************************************************************

	    getsequence.php -
		Echoes the sequence of integer values between $min and $max, arranged in a random order.
	
	 **************************************************************************************************************/
	require ( 'examples.inc.php' ) ;

	$random		=  new RandomOrg ( $agent_string ) ;
	$min		=  1 ;
	$max		=  10 ;
	
	$values		=  $random -> GetSequence ( $min, $max ) ;

	echo ( "Getting a random sequence of all integer values between $min and $max :\n" ) ;
	echo ( "\t" . implode ( ', ', $values ) . "\n" ) ;

	display_statistics ( $random ) ;
