<?php require 'vendor/autoload.php';
use Mailgun\Mailgun;
# Instantiate the client.
$mgClient = new Mailgun('d2cb18512bad1157edd2d1c8148c923a-fa6e84b7-a7a171d0');
$domain = "sandbox8f266bd3780543f7b2895f3f0743ea1f.mailgun.org";
# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
	'from'	=> 'Excited User <mailgun@sandbox8f266bd3780543f7b2895f3f0743ea1f.mailgun.org>',
	'to'	=> 'Baz <YOU@sandbox8f266bd3780543f7b2895f3f0743ea1f.mailgun.org>',
	'subject' => 'Hello',
	'text'	=> 'Testing some Mailgun awesomness!'
)); ?>