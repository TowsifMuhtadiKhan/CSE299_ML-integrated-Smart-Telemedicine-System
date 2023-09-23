<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once 'C:\xampp\htdocs\CSE299 Project\vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
$sid = 'AC0f2eb20d3429c7444207ff069d35514c';
$token = '46cc73f7ee9c388a5f6c0132ed7c0dd9';
$twilio = new Client($sid, $token);

$room = $twilio->video->v1->rooms
                          ->create([
                                       "type" => "go",
                                       "uniqueName" => "My First Video Room"
                                   ]
                          );

print($room->sid);