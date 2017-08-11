# Swagger\Client\PaymentApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPayment**](PaymentApi.md#createPayment) | **POST** /api/Payment/{orderKey} | Create
[**getPaymentStatus**](PaymentApi.md#getPaymentStatus) | **GET** /api/Payment/{paymentId}/status | Get status


# **createPayment**
> \Swagger\Client\Model\InlineResponse200 createPayment($order_key)

Create

By using the order key a new payment procedure is initialized. You can check the status  of the procedure by calling /payment/{paymentId}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\PaymentApi();
$order_key = "order_key_example"; // string | The order key

try {
    $result = $api_instance->createPayment($order_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->createPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_key** | **string**| The order key |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentStatus**
> \Swagger\Client\Model\InlineResponse200 getPaymentStatus($payment_id)

Get status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\PaymentApi();
$payment_id = "payment_id_example"; // string | The id of the payment

try {
    $result = $api_instance->getPaymentStatus($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->getPaymentStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**| The id of the payment |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

