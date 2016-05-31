{

	"name" : 'coloredcow/laravel-twilio',
	"description" : "",
	"license" : "MIT",
	"keywords" : [
		"laravel",
		"twilio",
		"sms",
		"voice",
		"twiml"
	],
	"authors": [
    		{
      			"name": "NishanthKD",
      			"email": "kd@coloredcow.in"
    		}
	],
	"require": {
    		"php": ">=5.6.0",
	},
	"require-dev": {
		"phpunit/phpunit": "~4.0",
	"autoload": {
    		"classmap": [
      			"src/Twilio",
      			"tests/TestCase.php"
    		],
    		"psr-0": {
      			"ColoredCow\\LaravelTwilio\\": "src/"
    		}
	}
}
