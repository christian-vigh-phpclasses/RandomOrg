<?php
	/**************************************************************************************************************

	    getstrings.php -
		Echoes $count random strings of $length, four times :
		1) With only numeric digits
		2) With only lowercase letters
		3) With only uppercase letters
		4) With alphanumeric letters
	
	 **************************************************************************************************************/
	require ( 'examples.inc.php' ) ;

	$random		=  new RandomOrg ( $agent_string ) ;
	$count		=  3 ;
	$length		=  8 ;

	echo ( "1) Getting $count random passwords of length $length (digits only) :\n" ) ;
	$values		=  $random -> GetStrings ( $count, $length, RandomOrg::STRING_DIGITS ) ;
	echo ( "\t" . implode ( ', ', $values ) . "\n" ) ;
	display_statistics ( $random ) ;

	echo ( "\n2) Getting $count random passwords of length $length (lowercase letters only) :\n" ) ;
	$values		=  $random -> GetStrings ( $count, $length, RandomOrg::STRING_LOWER ) ;
	echo ( "\t" . implode ( ', ', $values ) . "\n" ) ;
	display_statistics ( $random ) ;

	echo ( "\n3) Getting $count random passwords of length $length (uppercase letters only) :\n" ) ;
	$values		=  $random -> GetStrings ( $count, $length, RandomOrg::STRING_UPPER ) ;
	echo ( "\t" . implode ( ', ', $values ) . "\n" ) ;
	display_statistics ( $random ) ;

	echo ( "\n4) Getting $count random passwords of length $length (alphanumeric characters) :\n" ) ;
	$values		=  $random -> GetStrings ( $count, $length, RandomOrg::STRING_ALPHA ) ;
	echo ( "\t" . implode ( ', ', $values ) . "\n" ) ;
	display_statistics ( $random ) ;
