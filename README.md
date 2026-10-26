# lomi. PHP SDK

Official PHP client for the lomi. payments API. PHP 8.1 or later.

The package is not on Packagist. Install it from GitHub.

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/lomiafrica/lomi-php-sdk"
    }
  ],
  "require": {
    "lomi/lomi-sdk": "dev-main"
  }
}
```

```bash
composer install
```

```php
<?php

require_once 'vendor/autoload.php';

$lomi = new \Lomi\LomiClient(getenv('LOMI_SECRET_KEY'), [
    'environment' => 'test',
]);

$session = $lomi->checkoutSessions->create([
    'amount' => 5000,
    'currency_code' => 'XOF',
    'success_url' => 'https://example.com/success',
    'cancel_url' => 'https://example.com/cancel',
]);

header('Location: ' . $session['checkout_url']);
```

Check a webhook with the raw body and `X-Lomi-Signature` before you fulfill the order. The secret is the webhook signing secret, not the API key.

```php
$raw = file_get_contents('php://input');
$signature = $_SERVER['HTTP_X_LOMI_SIGNATURE'] ?? '';
$ok = $lomi->webhooks->verifySignature($raw, $signature, getenv('LOMI_WEBHOOK_SECRET'));
if (!$ok) {
    http_response_code(400);
    exit;
}
```

Calls return arrays. Errors throw `\Lomi\LomiException`.

Docs: https://docs.lomi.africa/build/sdks/php

hello@lomi.africa
