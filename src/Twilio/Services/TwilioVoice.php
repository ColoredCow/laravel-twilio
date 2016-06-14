<?php

namespace ColoredCow\Twilio\Services;

use Exception;
use Log;

/**
* Voice Service Class for Twilio
*/
class TwilioVoice extends Twilio
{
	function __construct()
	{
		
	}

	public static function call($to, $twiML){
		
		$from = parent::getFrom();
		$client = parent::getServiceClient();

		try {
			
			$call = $client->account->calls->create($from, $to, $twiML);

		} catch (Exception $e) {
			
			Log::error($e);

            return false;

		}

		return false;

	}

}