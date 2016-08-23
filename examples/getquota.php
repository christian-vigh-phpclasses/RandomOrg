<?php
	/**************************************************************************************************************

	    getquota.php -
		This script shows the quota associated to your ip address on www.random.org.
		The returned value is expressed in number of bits.
		Note that retrieving your quota does not affect your current quota...
	
	 **************************************************************************************************************/
	require ( 'examples.inc.php' ) ;

	$random		=  new RandomOrg ( $agent_string ) ;
	echo "Your current quota in bits is : " . $random -> GetQuota ( ) . "\n" ;
