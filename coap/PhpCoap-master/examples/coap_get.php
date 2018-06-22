<?php

require( __DIR__ . '/../vendor/autoload.php' );

$loop = React\EventLoop\Factory::create();

$client = new PhpCoap\Client( $loop );

$client->get( 'coap://skynet.im/status', function( $data ) {
	var_dump( json_decode( $data ));
} );

$loop->run();

?>