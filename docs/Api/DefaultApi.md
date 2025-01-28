# kruegge82\shipstage\DefaultApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**api2ViewsCreatePackage()**](DefaultApi.md#api2ViewsCreatePackage) | **POST** /api/v2.0/package/create/ | Create Package |
| [**api2ViewsGetLabel()**](DefaultApi.md#api2ViewsGetLabel) | **GET** /api/v2.0/package/{package_id}/label | Get Label |
| [**api2ViewsGetPackage()**](DefaultApi.md#api2ViewsGetPackage) | **GET** /api/v2.0/package/{package_id}/ | Get Package |


## `api2ViewsCreatePackage()`

```php
api2ViewsCreatePackage($data): \kruegge82\shipstage\Model\Success
```

Create Package

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: TokenAuth
$config = kruegge82\shipstage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new kruegge82\shipstage\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \kruegge82\shipstage\Model\Data(); // \kruegge82\shipstage\Model\Data

try {
    $result = $apiInstance->api2ViewsCreatePackage($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->api2ViewsCreatePackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\kruegge82\shipstage\Model\Data**](../Model/Data.md)|  | |

### Return type

[**\kruegge82\shipstage\Model\Success**](../Model/Success.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `api2ViewsGetLabel()`

```php
api2ViewsGetLabel($package_id)
```

Get Label

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: TokenAuth
$config = kruegge82\shipstage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new kruegge82\shipstage\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 56; // int

try {
    $apiInstance->api2ViewsGetLabel($package_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->api2ViewsGetLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **package_id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `api2ViewsGetPackage()`

```php
api2ViewsGetPackage($package_id): \kruegge82\shipstage\Model\GetPackageData
```

Get Package

Get package information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: TokenAuth
$config = kruegge82\shipstage\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new kruegge82\shipstage\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 56; // int

try {
    $result = $apiInstance->api2ViewsGetPackage($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->api2ViewsGetPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **package_id** | **int**|  | |

### Return type

[**\kruegge82\shipstage\Model\GetPackageData**](../Model/GetPackageData.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
