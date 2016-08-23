<?php
	/**************************************************************************************************************

	    examples.inc.php -
		An include file used by all the examples.
	
	 **************************************************************************************************************/
	require ( '../RandomOrg.phpclass' ) ;

	if  ( php_sapi_name ( )  !=  'cli' )
		echo "<pre>" ;

	// Put your own address here, to be used as a user agent string - this is the recommended way of proceeding, so
	// that people at random.org can reach you if there is any issue with your requests
	$agent_string	=  "myaddress@someserver.com" ;

	// display_statistics -
	//	Displays statistics about the last query.
	function  display_statistics ( $random )
	   {
		echo ( "\n" ) ;
		echo ( "Query statistics :\n" ) ;
		echo ( "~~~~~~~~~~~~~~~~\n" ) ;

		$info	=  $random -> GetQueryInfo ( ) ;

		echo ( "\tType            : {$info [ 'type' ]}\n" ) ;
		echo ( "\tQuery           : {$info [ 'query' ]}\n" ) ;
		echo ( "\tQuery time      : " . date ( 'H:i:s', $info [ 'query-time' ] ) . "\n" ) ; 
		echo ( "\tResult          : {$info [ 'result' ]}\n" ) ;
		echo ( "\tResult time     : " . date ( 'H:i:s', $info [ 'result-time' ] ) . "\n" ) ; 
		echo ( "\tElapsed (ms)    : {$info [ 'elapsed' ]}\n" ) ;
		echo ( "\tQuota (in bits) : {$info [ 'quota' ]}\n" ) ;
	    }
