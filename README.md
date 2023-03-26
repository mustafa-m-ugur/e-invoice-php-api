# e-invoice-php-api
E-Arşiv, E-fatura Entegrasyonu


### License
- See [ChangeLog](https://github.com/mustafa-m-ugur/e-invovice-php-api/blob/main/LICENSE)

## Setup
```php
composer require mustafa-m-ugur/e-invovice-php-api
```

## Client

```php
use CMD\Invoice\InvoiceManagement;
include "vendor/autoload.php";

$client = new InvoiceManagement();
$client->setUsername("XXXX")->setPassword("XXXX"); // Production
$client->setDebugMode(true)->setTestCredentials(); // Test
var_dump($client->getCredentials());
$client->connect();
```