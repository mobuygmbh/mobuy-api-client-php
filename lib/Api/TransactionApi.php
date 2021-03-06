<?php
/**
 * TransactionApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mobuy API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * TransactionApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return TransactionApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation findTransactions
     *
     * Find
     *
     * @param \DateTime $start Start date (optional)
     * @param \DateTime $end End date (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2001[]
     */
    public function findTransactions($start = null, $end = null)
    {
        list($response) = $this->findTransactionsWithHttpInfo($start, $end);
        return $response;
    }

    /**
     * Operation findTransactionsWithHttpInfo
     *
     * Find
     *
     * @param \DateTime $start Start date (optional)
     * @param \DateTime $end End date (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2001[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findTransactionsWithHttpInfo($start = null, $end = null)
    {
        // parse inputs
        $resourcePath = "/api/Transaction/find";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json', 'application/xml', 'text/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2001[]',
                '/api/Transaction/find'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2001[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTransactionStatus
     *
     * Get status
     *
     * @param int $transaction_id Transaction Id (optional)
     * @param string $payment_id TPayment id (optional)
     * @param string $reference Reference (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2001
     */
    public function getTransactionStatus($transaction_id = null, $payment_id = null, $reference = null)
    {
        list($response) = $this->getTransactionStatusWithHttpInfo($transaction_id, $payment_id, $reference);
        return $response;
    }

    /**
     * Operation getTransactionStatusWithHttpInfo
     *
     * Get status
     *
     * @param int $transaction_id Transaction Id (optional)
     * @param string $payment_id TPayment id (optional)
     * @param string $reference Reference (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransactionStatusWithHttpInfo($transaction_id = null, $payment_id = null, $reference = null)
    {
        // parse inputs
        $resourcePath = "/api/Transaction";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json', 'application/xml', 'text/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($transaction_id !== null) {
            $queryParams['transactionId'] = $this->apiClient->getSerializer()->toQueryValue($transaction_id);
        }
        // query params
        if ($payment_id !== null) {
            $queryParams['paymentId'] = $this->apiClient->getSerializer()->toQueryValue($payment_id);
        }
        // query params
        if ($reference !== null) {
            $queryParams['reference'] = $this->apiClient->getSerializer()->toQueryValue($reference);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2001',
                '/api/Transaction'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2001', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2001', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
