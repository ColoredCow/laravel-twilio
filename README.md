# Laravel and Twilio Integration
Twilio Integration for Laravel


## Installation


Require this package in your `composer.json` and update composer.

```php
"coloredcow/laravel-twilio": "1.0.*"
```

After updating composer, add the ServiceProvider to the providers array in `config/app.php`

```php
ColoredCow\Twilio\Providers\SmsServiceProvider::class,
ColoredCow\Twilio\Providers\VoiceServiceProvider::class,
```

You can use the facade for shorter code. Add this to your aliases:

```php
'Sms' => ColoredCow\Twilio\Facades\Sms::class,
'Voice' => ColoredCow\Twilio\Facades\Voice::class,
```
