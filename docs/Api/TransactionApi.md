# Swagger\Client\TransactionApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findTransactions**](TransactionApi.md#findTransactions) | **GET** /api/Transaction/find | Find
[**getTransactionStatus**](TransactionApi.md#getTransactionStatus) | **GET** /api/Transaction | Get status


# **findTransactions**
> \Swagger\Client\Model\InlineResponse2001[] findTransactions($start, $end)

Find

Query past transactions by date range. Dates must be in ISO-8601 format (YYYY-MM-DDTHH:mm:ss.sssZ)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\TransactionApi();
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date

try {
    $result = $api_instance->findTransactions($start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->findTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001[]**](../Model/InlineResponse2001.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionStatus**
> \Swagger\Client\Model\InlineResponse2001 getTransactionStatus($transaction_id, $payment_id, $reference)

Get status

You can get the transaction by either the payment id, the transaction id or the reference you provided with Create Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\TransactionApi();
$transaction_id = 56; // int | Transaction Id
$payment_id = "payment_id_example"; // string | TPayment id
$reference = "reference_example"; // string | Reference

try {
    $result = $api_instance->getTransactionStatus($transaction_id, $payment_id, $reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->getTransactionStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **int**| Transaction Id | [optional]
 **payment_id** | **string**| TPayment id | [optional]
 **reference** | **string**| Reference | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

