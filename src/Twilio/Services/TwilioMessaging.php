<?php

namespace ColoredCow\Twilio\Services;

use Event;
use Exception;
use Log;
use myocuhub\Events\MakeAuditEntry;
use myocuhub\Services\Twilio\Twilio;

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