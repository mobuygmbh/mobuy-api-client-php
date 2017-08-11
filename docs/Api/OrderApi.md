# Swagger\Client\OrderApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrder**](OrderApi.md#createOrder) | **POST** /api/Order | Create


# **createOrder**
> \Swagger\Client\Model\InlineResponse201 createOrder($order_payload)

Create

Creates a new order. The order key must be activated in 180 seconds.

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_payload** | [**\Swagger\Client\Model\OrderPayload**](../Model/OrderPayload.md)| Order payload | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json, application/xml, text/xml
 - **Accept**: text/plain, application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

