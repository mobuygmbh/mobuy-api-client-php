# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v1
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\OrderApi();
$order_payload = new \Swagger\Client\Model\OrderPayload(); // \Swagger\Client\Model\OrderPayload | Order payload

try {
    $result = $api_instance->createOrder($order_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createOrder: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrderApi* | [**createOrder**](docs/Api/OrderApi.md#createorder) | **POST** /api/Order | Create
*PaymentApi* | [**createPayment**](docs/Api/PaymentApi.md#createpayment) | **POST** /api/Payment/{orderKey} | Create
*PaymentApi* | [**getPaymentStatus**](docs/Api/PaymentApi.md#getpaymentstatus) | **GET** /api/Payment/{paymentId}/status | Get status
*TransactionApi* | [**findTransactions**](docs/Api/TransactionApi.md#findtransactions) | **GET** /api/Transaction/find | Find
*TransactionApi* | [**getTransactionStatus**](docs/Api/TransactionApi.md#gettransactionstatus) | **GET** /api/Transaction | Get status


## Documentation For Models

 - [Error](docs/Model/Error.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse201](docs/Model/InlineResponse201.md)
 - [InlineResponse400](docs/Model/InlineResponse400.md)
 - [InlineResponse401](docs/Model/InlineResponse401.md)
 - [NewOrder](docs/Model/NewOrder.md)
 - [Order](docs/Model/Order.md)
 - [OrderPayload](docs/Model/OrderPayload.md)
 - [Payment](docs/Model/Payment.md)
 - [Transaction](docs/Model/Transaction.md)
 - [ValidationError](docs/Model/ValidationError.md)


## Documentation For Authorization


## apiKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author




