<?php

namespace ColoredCow\Twilio\Services;

use Exception;
use Log;

/**
* Messaging Service Class for Twilio
*/
class TwilioMessaging extends Twilio
{
	public function __construct()
	{
		
	}

	public static function send($to, $message){

		try {
			
			$from = parent::getFrom();
			$client = parent::getServiceClient();
			$message = $client->account->messages->sendMessage($from, $to, $message);

			return $message->sid;

		} catch (Exception $e) {

			Log::error($e);

            return false;
		}

		return false;
		
	}
}