# ProfileService\Client\DefaultApi

All URIs are relative to *https://api.discover.swiss/test/profile*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptATermVersion**](DefaultApi.md#acceptatermversion) | **POST** /terms | Accept a term-version
[**addGuestCardToUser**](DefaultApi.md#addguestcardtouser) | **PUT** /tickets/guestcard | Add guest card to user
[**cancelDeletionProfile**](DefaultApi.md#canceldeletionprofile) | **PUT** /me/cancelDelete | Cancel deletion profile
[**checkAcceptedTerm**](DefaultApi.md#checkacceptedterm) | **GET** /terms/{code} | Check accepted term
[**confirmDeletionProfile**](DefaultApi.md#confirmdeletionprofile) | **PUT** /me/confirmDelete | Confirm deletion profile
[**createPartnerdata**](DefaultApi.md#createpartnerdata) | **POST** /partnerdata | Create partnerdata
[**createParty**](DefaultApi.md#createparty) | **POST** /parties | Create party
[**deleteMedia**](DefaultApi.md#deletemedia) | **DELETE** /media/{identifier} | Delete media
[**deleteMyProfile**](DefaultApi.md#deletemyprofile) | **DELETE** /me | Delete my profile
[**deletePartnerdata**](DefaultApi.md#deletepartnerdata) | **DELETE** /partnerdata/{name} | Delete partnerdata
[**deletePartnerdataSharePermission**](DefaultApi.md#deletepartnerdatasharepermission) | **DELETE** /partnerdata/{name}/share | Delete partnerdata share permission
[**deleteParty**](DefaultApi.md#deleteparty) | **DELETE** /parties/{id} | Delete party
[**deleteProfilePicture**](DefaultApi.md#deleteprofilepicture) | **DELETE** /me/profileimage | Delete profile picture
[**downloadMedia**](DefaultApi.md#downloadmedia) | **GET** /media/{identifier}/download | Download media
[**downloadOrderinfo**](DefaultApi.md#downloadorderinfo) | **GET** /orderinfos/{orderToken} | Download orderinfo
[**downloadTicket**](DefaultApi.md#downloadticket) | **GET** /tickets/{id}/download | Download ticket
[**getBusinessTrailEntries**](DefaultApi.md#getbusinesstrailentries) | **GET** /businesstrail | Get business trail entries
[**getMedia**](DefaultApi.md#getmedia) | **GET** /media/{identifier} | Get media
[**getMediaBinary**](DefaultApi.md#getmediabinary) | **GET** /media/{identifier}/base64 | Get media binary
[**getMediaThumbnailBinary**](DefaultApi.md#getmediathumbnailbinary) | **GET** /media/{identifier}/thumbnail | Get media thumbnail binary
[**getMyMedia**](DefaultApi.md#getmymedia) | **GET** /media | Get my media
[**getMyOrders**](DefaultApi.md#getmyorders) | **GET** /orders | Get my orders
[**getMyParties**](DefaultApi.md#getmyparties) | **GET** /parties | Get my parties
[**getMyPartnerData**](DefaultApi.md#getmypartnerdata) | **GET** /partnerdata | Get my partner-data
[**getMyProfile**](DefaultApi.md#getmyprofile) | **GET** /me | Get my profile
[**getMyTickets**](DefaultApi.md#getmytickets) | **GET** /tickets | Get my tickets
[**getOrder**](DefaultApi.md#getorder) | **GET** /orders/{id} | Get order
[**getPartnerdata**](DefaultApi.md#getpartnerdata) | **GET** /partnerdata/{name} | Get partnerdata
[**getParty**](DefaultApi.md#getparty) | **GET** /parties/{id} | Get party
[**getProfilePictureThumbnail**](DefaultApi.md#getprofilepicturethumbnail) | **GET** /me/profileimage | Get profile picture thumbnail
[**getStatus**](DefaultApi.md#getstatus) | **GET** /status | GetStatus
[**getStatusAbout**](DefaultApi.md#getstatusabout) | **GET** /status/about | GetStatusAbout
[**getTicket**](DefaultApi.md#getticket) | **GET** /tickets/{id} | Get ticket
[**getTicketBinary**](DefaultApi.md#getticketbinary) | **GET** /tickets/{id}/base64 | Get ticket binary
[**getToken**](DefaultApi.md#gettoken) | **POST** /token | Get token
[**importSharedProfileData**](DefaultApi.md#importsharedprofiledata) | **PUT** /import/{sharingIdentifier} | Import shared profile data
[**resendAccountVerificationEmail**](DefaultApi.md#resendaccountverificationemail) | **PUT** /me/verify/email | Resend account verification email
[**saveConsentDissent**](DefaultApi.md#saveconsentdissent) | **POST** /anonymous/terms | Save consent/dissent
[**sharePartnerdataObject**](DefaultApi.md#sharepartnerdataobject) | **PUT** /partnerdata/{name}/share | Share partnerdata object
[**updateMyProfile**](DefaultApi.md#updatemyprofile) | **PATCH** /me | Update my profile
[**updatePartnerdata**](DefaultApi.md#updatepartnerdata) | **PUT** /partnerdata/{name} | Update partnerdata
[**updatePartnerdataProperty**](DefaultApi.md#updatepartnerdataproperty) | **PUT** /partnerdata/{name}/{propertyId} | Update partnerdata property
[**updateParty**](DefaultApi.md#updateparty) | **PUT** /parties/{id} | Update party
[**uploadMedia**](DefaultApi.md#uploadmedia) | **POST** /media | Upload media
[**verifyAccountEmail**](DefaultApi.md#verifyaccountemail) | **PUT** /me/verify | Verify account email
[**writeBusinessTrailEntry**](DefaultApi.md#writebusinesstrailentry) | **POST** /businesstrail | Write business trail entry

# **acceptATermVersion**
> \ProfileService\Client\Model\DsTermVersionCheckResponse acceptATermVersion($body, $ocp_apim_subscription_key, $accept_timezone)

Accept a term-version

Writes a business trail entry to protocol the acceptance of the term version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProfileService\Client\Model\DsAcceptTermVersionRequest(); // \ProfileService\Client\Model\DsAcceptTermVersionRequest | TermVersionCheckRequest.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->acceptATermVersion($body, $ocp_apim_subscription_key, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->acceptATermVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProfileService\Client\Model\DsAcceptTermVersionRequest**](../Model/DsAcceptTermVersionRequest.md)| TermVersionCheckRequest. | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsTermVersionCheckResponse**](../Model/DsTermVersionCheckResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addGuestCardToUser**
> \ProfileService\Client\Model\DsTicketResponse addGuestCardToUser($body, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_language)

Add guest card to user

Add guest card to user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProfileService\Client\Model\DsGuestCardRequest(); // \ProfileService\Client\Model\DsGuestCardRequest | Deposite Guest Card request model.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_language = "accept_language_example"; // string | Localized properties.

try {
    $result = $apiInstance->addGuestCardToUser($body, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addGuestCardToUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProfileService\Client\Model\DsGuestCardRequest**](../Model/DsGuestCardRequest.md)| Deposite Guest Card request model. | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_language** | **string**| Localized properties. | [optional]

### Return type

[**\ProfileService\Client\Model\DsTicketResponse**](../Model/DsTicketResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelDeletionProfile**
> cancelDeletionProfile($authorization, $ocp_apim_subscription_key)

Cancel deletion profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.

try {
    $apiInstance->cancelDeletionProfile($authorization, $ocp_apim_subscription_key);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cancelDeletionProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization header to identify the B2C user profile. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAcceptedTerm**
> \ProfileService\Client\Model\DsTermVersionCheckResponse checkAcceptedTerm($code, $ocp_apim_subscription_key, $accept_timezone)

Check accepted term

Check if the current user has accepted the newest version of the term.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | The code of the term to test if it has been accepted already.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->checkAcceptedTerm($code, $ocp_apim_subscription_key, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->checkAcceptedTerm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| The code of the term to test if it has been accepted already. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsTermVersionCheckResponse**](../Model/DsTermVersionCheckResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirmDeletionProfile**
> confirmDeletionProfile($authorization, $ocp_apim_subscription_key)

Confirm deletion profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.

try {
    $apiInstance->confirmDeletionProfile($authorization, $ocp_apim_subscription_key);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->confirmDeletionProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization header to identify the B2C user profile. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPartnerdata**
> \ProfileService\Client\Model\DsPartnerDataResponse createPartnerdata($body, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Create partnerdata

Creates a new partnerdata-object in the current profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProfileService\Client\Model\DsPartnerDataRequest(); // \ProfileService\Client\Model\DsPartnerDataRequest | PartnerDataRequest.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->createPartnerdata($body, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createPartnerdata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProfileService\Client\Model\DsPartnerDataRequest**](../Model/DsPartnerDataRequest.md)| PartnerDataRequest. | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsPartnerDataResponse**](../Model/DsPartnerDataResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createParty**
> \ProfileService\Client\Model\DsPartyResponse createParty($body, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Create party

Creates a new party-object in the current profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProfileService\Client\Model\DsPartyRequest(); // \ProfileService\Client\Model\DsPartyRequest | PartyRequest - group of travelers.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->createParty($body, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProfileService\Client\Model\DsPartyRequest**](../Model/DsPartyRequest.md)| PartyRequest - group of travelers. | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsPartyResponse**](../Model/DsPartyResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMedia**
> deleteMedia($identifier, $ocp_apim_subscription_key, $authorization, $profile_token)

Delete media

delete specified media

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Identifier of the media.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.

try {
    $apiInstance->deleteMedia($identifier, $ocp_apim_subscription_key, $authorization, $profile_token);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteMedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Identifier of the media. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMyProfile**
> deleteMyProfile($ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Delete my profile

Initiate the profile deletion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $apiInstance->deleteMyProfile($ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteMyProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePartnerdata**
> \ProfileService\Client\Model\DsPartnerdataNameDelete200ApplicationJsonResponse deletePartnerdata($name, $ocp_apim_subscription_key, $authorization, $profile_token)

Delete partnerdata

Updates a existing partnerdata-object of the current profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Name of the partnerdata.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.

try {
    $result = $apiInstance->deletePartnerdata($name, $ocp_apim_subscription_key, $authorization, $profile_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deletePartnerdata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the partnerdata. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]

### Return type

[**\ProfileService\Client\Model\DsPartnerdataNameDelete200ApplicationJsonResponse**](../Model/DsPartnerdataNameDelete200ApplicationJsonResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePartnerdataSharePermission**
> deletePartnerdataSharePermission($name, $ocp_apim_subscription_key, $authorization, $profile_token)

Delete partnerdata share permission

Delete share permission so that it cannot be imported anymore.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Name of the partnerdata.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.

try {
    $apiInstance->deletePartnerdataSharePermission($name, $ocp_apim_subscription_key, $authorization, $profile_token);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deletePartnerdataSharePermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the partnerdata. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParty**
> \ProfileService\Client\Model\DsPartiesIdDelete200ApplicationJsonResponse deleteParty($id, $ocp_apim_subscription_key, $authorization, $profile_token)

Delete party

Updates a existing party-object of the current profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of the party.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.

try {
    $result = $apiInstance->deleteParty($id, $ocp_apim_subscription_key, $authorization, $profile_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the party. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]

### Return type

[**\ProfileService\Client\Model\DsPartiesIdDelete200ApplicationJsonResponse**](../Model/DsPartiesIdDelete200ApplicationJsonResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProfilePicture**
> deleteProfilePicture($ocp_apim_subscription_key, $authorization, $profile_token)

Delete profile picture

Delete profile picture media

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.

try {
    $apiInstance->deleteProfilePicture($ocp_apim_subscription_key, $authorization, $profile_token);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteProfilePicture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadMedia**
> \ProfileService\Client\Model\DsMediaIdentifierDownloadGet200ApplicationOctetStreamResponse downloadMedia($identifier, $ocp_apim_subscription_key, $authorization, $profile_token)

Download media

gets media content as a file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Identifier of the media.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.

try {
    $result = $apiInstance->downloadMedia($identifier, $ocp_apim_subscription_key, $authorization, $profile_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->downloadMedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Identifier of the media. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]

### Return type

[**\ProfileService\Client\Model\DsMediaIdentifierDownloadGet200ApplicationOctetStreamResponse**](../Model/DsMediaIdentifierDownloadGet200ApplicationOctetStreamResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadOrderinfo**
> \ProfileService\Client\Model\DsOrderDownload downloadOrderinfo($order_token, $ocp_apim_subscription_key, $accept_timezone)

Download orderinfo

gets one single order information by the ordertoken without needed authentication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_token = "order_token_example"; // string | the token of the order.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->downloadOrderinfo($order_token, $ocp_apim_subscription_key, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->downloadOrderinfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_token** | **string**| the token of the order. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsOrderDownload**](../Model/DsOrderDownload.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadTicket**
> \ProfileService\Client\Model\DsTicketsIdDownloadGet200ApplicationOctetStreamResponse downloadTicket($id, $ocp_apim_subscription_key, $authorization, $profile_token)

Download ticket

gets the ticket content as a file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of the ticket.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.

try {
    $result = $apiInstance->downloadTicket($id, $ocp_apim_subscription_key, $authorization, $profile_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->downloadTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the ticket. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]

### Return type

[**\ProfileService\Client\Model\DsTicketsIdDownloadGet200ApplicationOctetStreamResponse**](../Model/DsTicketsIdDownloadGet200ApplicationOctetStreamResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBusinessTrailEntries**
> \ProfileService\Client\Model\DsBusinessTrailEntryResponse getBusinessTrailEntries($body, $ocp_apim_subscription_key, $accept_timezone)

Get business trail entries

Get my profile business trail entries from the business trail table storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProfileService\Client\Model\DsBusinessTrailRequest(); // \ProfileService\Client\Model\DsBusinessTrailRequest | BusinessTrailRequest.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->getBusinessTrailEntries($body, $ocp_apim_subscription_key, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBusinessTrailEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProfileService\Client\Model\DsBusinessTrailRequest**](../Model/DsBusinessTrailRequest.md)| BusinessTrailRequest. | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsBusinessTrailEntryResponse**](../Model/DsBusinessTrailEntryResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMedia**
> \ProfileService\Client\Model\DsProfileMediaResponse getMedia($identifier, $ocp_apim_subscription_key, $authorization, $profile_token)

Get media

gets one single media

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Identifier of the media.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.

try {
    $result = $apiInstance->getMedia($identifier, $ocp_apim_subscription_key, $authorization, $profile_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Identifier of the media. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]

### Return type

[**\ProfileService\Client\Model\DsProfileMediaResponse**](../Model/DsProfileMediaResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaBinary**
> \ProfileService\Client\Model\DsMediaIdentifierBase64Get200TextPlainResponse getMediaBinary($identifier, $ocp_apim_subscription_key, $authorization, $profile_token)

Get media binary

gets media content as a base64 string

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Identifier of the media.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.

try {
    $result = $apiInstance->getMediaBinary($identifier, $ocp_apim_subscription_key, $authorization, $profile_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMediaBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Identifier of the media. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]

### Return type

[**\ProfileService\Client\Model\DsMediaIdentifierBase64Get200TextPlainResponse**](../Model/DsMediaIdentifierBase64Get200TextPlainResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaThumbnailBinary**
> \ProfileService\Client\Model\DsMediaIdentifierThumbnailGet200TextPlainResponse getMediaThumbnailBinary($identifier, $ocp_apim_subscription_key, $authorization, $profile_token)

Get media thumbnail binary

gets media thumbnail content as a base64 string

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | Identifier of the media.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.

try {
    $result = $apiInstance->getMediaThumbnailBinary($identifier, $ocp_apim_subscription_key, $authorization, $profile_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMediaThumbnailBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| Identifier of the media. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]

### Return type

[**\ProfileService\Client\Model\DsMediaIdentifierThumbnailGet200TextPlainResponse**](../Model/DsMediaIdentifierThumbnailGet200TextPlainResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyMedia**
> \ProfileService\Client\Model\DsProfileMediaResponse getMyMedia($ocp_apim_subscription_key, $authorization, $profile_token)

Get my media

gets all media of the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.

try {
    $result = $apiInstance->getMyMedia($ocp_apim_subscription_key, $authorization, $profile_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMyMedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]

### Return type

[**\ProfileService\Client\Model\DsProfileMediaResponse**](../Model/DsProfileMediaResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyOrders**
> \ProfileService\Client\Model\DsOrdersResponse getMyOrders($continuation_token, $top, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Get my orders

gets all orders of the current user in the current partner context

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$continuation_token = "continuation_token_example"; // string | Use it to get next set of data.
$top = 56; // int | Format - int32. Number of next set of entities.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->getMyOrders($continuation_token, $top, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMyOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **continuation_token** | **string**| Use it to get next set of data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsOrdersResponse**](../Model/DsOrdersResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyParties**
> \ProfileService\Client\Model\DsPartyResponseArray getMyParties($ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Get my parties

gets all parties (groups) of the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->getMyParties($ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMyParties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsPartyResponseArray**](../Model/DsPartyResponseArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyPartnerData**
> \ProfileService\Client\Model\DsPartnersDataResponse getMyPartnerData($continuation_token, $top, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Get my partner-data

gets all partnerdata of the current user and partner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$continuation_token = "continuation_token_example"; // string | Use it to get next set of data.
$top = 56; // int | Format - int32. Number of next set of entities.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->getMyPartnerData($continuation_token, $top, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMyPartnerData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **continuation_token** | **string**| Use it to get next set of data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsPartnersDataResponse**](../Model/DsPartnersDataResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyProfile**
> \ProfileService\Client\Model\DsPersonResponse getMyProfile($ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Get my profile

Returns the person-data of the current profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->getMyProfile($ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMyProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsPersonResponse**](../Model/DsPersonResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyTickets**
> \ProfileService\Client\Model\DsTicketsResponse getMyTickets($scope, $continuation_token, $top, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Get my tickets

gets all tickets of the current user in the current partner context

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scope = "scope_example"; // string | Scope of the tickets
$continuation_token = "continuation_token_example"; // string | Use it to get next set of data.
$top = 56; // int | Format - int32. Number of next set of entities.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->getMyTickets($scope, $continuation_token, $top, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMyTickets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scope** | **string**| Scope of the tickets | [optional]
 **continuation_token** | **string**| Use it to get next set of data. | [optional]
 **top** | **int**| Format - int32. Number of next set of entities. | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsTicketsResponse**](../Model/DsTicketsResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrder**
> \ProfileService\Client\Model\DsOrderB2CResponse getOrder($id, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Get order

gets one single order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of the order.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->getOrder($id, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the order. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsOrderB2CResponse**](../Model/DsOrderB2CResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPartnerdata**
> \ProfileService\Client\Model\DsPartnerDataResponse getPartnerdata($name, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Get partnerdata

gets one single partnerdata (group)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Name of the partnerdata.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->getPartnerdata($name, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPartnerdata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the partnerdata. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsPartnerDataResponse**](../Model/DsPartnerDataResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParty**
> \ProfileService\Client\Model\DsPartyResponse getParty($id, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Get party

gets one single party (group)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of the party.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->getParty($id, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the party. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsPartyResponse**](../Model/DsPartyResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProfilePictureThumbnail**
> \ProfileService\Client\Model\DsMeProfileimageGet200TextPlainResponse getProfilePictureThumbnail($ocp_apim_subscription_key, $authorization, $profile_token)

Get profile picture thumbnail

Gets profile picture thumbnail as a base64 string

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.

try {
    $result = $apiInstance->getProfilePictureThumbnail($ocp_apim_subscription_key, $authorization, $profile_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProfilePictureThumbnail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]

### Return type

[**\ProfileService\Client\Model\DsMeProfileimageGet200TextPlainResponse**](../Model/DsMeProfileimageGet200TextPlainResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatus**
> getStatus($ocp_apim_subscription_key)

GetStatus

Get API Status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.

try {
    $apiInstance->getStatus($ocp_apim_subscription_key);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatusAbout**
> getStatusAbout($ocp_apim_subscription_key)

GetStatusAbout

Get API Status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.

try {
    $apiInstance->getStatusAbout($ocp_apim_subscription_key);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStatusAbout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicket**
> \ProfileService\Client\Model\DsTicketB2CResponse getTicket($id, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Get ticket

gets one single ticket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of the ticket.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->getTicket($id, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the ticket. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsTicketB2CResponse**](../Model/DsTicketB2CResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketBinary**
> \ProfileService\Client\Model\DsTicketsIdBase64Get200TextPlainResponse getTicketBinary($id, $ocp_apim_subscription_key, $authorization, $profile_token)

Get ticket binary

gets ticket content as a base64 string

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of the ticket.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.

try {
    $result = $apiInstance->getTicketBinary($id, $ocp_apim_subscription_key, $authorization, $profile_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTicketBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the ticket. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]

### Return type

[**\ProfileService\Client\Model\DsTicketsIdBase64Get200TextPlainResponse**](../Model/DsTicketsIdBase64Get200TextPlainResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getToken**
> \ProfileService\Client\Model\DsTokenResponse getToken($grant_type, $refresh_token, $max_refresh_lifetime, $ocp_apim_subscription_key, $authorization, $accept_timezone)

Get token

Returns the profile token based on the grant_type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grant_type = "grant_type_example"; // string | the type of the token request: guest, authorization_header or refresh_token
$refresh_token = "refresh_token_example"; // string | The refresh token case of grant_type=refresh_token
$max_refresh_lifetime = "max_refresh_lifetime_example"; // string | maximal refresh token lifetime requested by the client in days
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->getToken($grant_type, $refresh_token, $max_refresh_lifetime, $ocp_apim_subscription_key, $authorization, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**| the type of the token request: guest, authorization_header or refresh_token |
 **refresh_token** | **string**| The refresh token case of grant_type&#x3D;refresh_token | [optional]
 **max_refresh_lifetime** | **string**| maximal refresh token lifetime requested by the client in days | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsTokenResponse**](../Model/DsTokenResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importSharedProfileData**
> \ProfileService\Client\Model\DsProfileDataImportResponse importSharedProfileData($sharing_identifier, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Import shared profile data

Import a shared profile data object into your profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharing_identifier = "sharing_identifier_example"; // string | Profile Data share ID
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->importSharedProfileData($sharing_identifier, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->importSharedProfileData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharing_identifier** | **string**| Profile Data share ID |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsProfileDataImportResponse**](../Model/DsProfileDataImportResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resendAccountVerificationEmail**
> resendAccountVerificationEmail($authorization, $ocp_apim_subscription_key)

Resend account verification email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.

try {
    $apiInstance->resendAccountVerificationEmail($authorization, $ocp_apim_subscription_key);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->resendAccountVerificationEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization header to identify the B2C user profile. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveConsentDissent**
> \ProfileService\Client\Model\DsTokenResponse saveConsentDissent($body, $ocp_apim_subscription_key, $accept_timezone, $max_refresh_lifetime)

Save consent/dissent

Save consent/dissent with terms in request and returns ProfileToken for new user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProfileService\Client\Model\DsAcceptTermVersionRequest(); // \ProfileService\Client\Model\DsAcceptTermVersionRequest | AcceptTermVersionRequest.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times
$max_refresh_lifetime = "max_refresh_lifetime_example"; // string | maximal refresh token lifetime requested by the client in days

try {
    $result = $apiInstance->saveConsentDissent($body, $ocp_apim_subscription_key, $accept_timezone, $max_refresh_lifetime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->saveConsentDissent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProfileService\Client\Model\DsAcceptTermVersionRequest**](../Model/DsAcceptTermVersionRequest.md)| AcceptTermVersionRequest. | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]
 **max_refresh_lifetime** | **string**| maximal refresh token lifetime requested by the client in days | [optional]

### Return type

[**\ProfileService\Client\Model\DsTokenResponse**](../Model/DsTokenResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharePartnerdataObject**
> \ProfileService\Client\Model\DsProfileDataShareResponse sharePartnerdataObject($name, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Share partnerdata object

Adds share permission so that it can be imported by another user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Name of the partnerdata.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->sharePartnerdataObject($name, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sharePartnerdataObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the partnerdata. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsProfileDataShareResponse**](../Model/DsProfileDataShareResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMyProfile**
> \ProfileService\Client\Model\DsPersonResponse updateMyProfile($body, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Update my profile

Returns the person-data of the current profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProfileService\Client\Model\DsPersonRequest(); // \ProfileService\Client\Model\DsPersonRequest | PersonRequest properties to update.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->updateMyProfile($body, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateMyProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProfileService\Client\Model\DsPersonRequest**](../Model/DsPersonRequest.md)| PersonRequest properties to update. | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsPersonResponse**](../Model/DsPersonResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePartnerdata**
> \ProfileService\Client\Model\DsPartnerDataResponse updatePartnerdata($name, $body, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Update partnerdata

Updates a existing partnerdata-object of the current profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Name of the partnerdata.
$body = new \ProfileService\Client\Model\DsPartnerDataRequest(); // \ProfileService\Client\Model\DsPartnerDataRequest | PartnerDataRequest to update.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->updatePartnerdata($name, $body, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updatePartnerdata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the partnerdata. |
 **body** | [**\ProfileService\Client\Model\DsPartnerDataRequest**](../Model/DsPartnerDataRequest.md)| PartnerDataRequest to update. | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsPartnerDataResponse**](../Model/DsPartnerDataResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePartnerdataProperty**
> updatePartnerdataProperty($name, $property_id, $body, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Update partnerdata property

Updates an existing partnerdata property of the current profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Name of the partnerdata.
$property_id = "property_id_example"; // string | Name of the propertyId
$body = new \ProfileService\Client\Model\DsPropertyValueRequest(); // \ProfileService\Client\Model\DsPropertyValueRequest | PartnerDataRequest to update.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $apiInstance->updatePartnerdataProperty($name, $property_id, $body, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updatePartnerdataProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the partnerdata. |
 **property_id** | **string**| Name of the propertyId |
 **body** | [**\ProfileService\Client\Model\DsPropertyValueRequest**](../Model/DsPropertyValueRequest.md)| PartnerDataRequest to update. | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateParty**
> \ProfileService\Client\Model\DsPartyResponse updateParty($id, $body, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone)

Update party

Updates a existing party-object of the current profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of the party.
$body = new \ProfileService\Client\Model\DsPartyRequest(); // \ProfileService\Client\Model\DsPartyRequest | PartyRequest to update.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->updateParty($id, $body, $ocp_apim_subscription_key, $authorization, $profile_token, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the party. |
 **body** | [**\ProfileService\Client\Model\DsPartyRequest**](../Model/DsPartyRequest.md)| PartyRequest to update. | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsPartyResponse**](../Model/DsPartyResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadMedia**
> \ProfileService\Client\Model\DsProfileMediaResponse uploadMedia($ocp_apim_subscription_key, $authorization, $profile_token)

Upload media

Uploads new media for the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$profile_token = "profile_token_example"; // string | Profile token to identify the guest user profile.

try {
    $result = $apiInstance->uploadMedia($ocp_apim_subscription_key, $authorization, $profile_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uploadMedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **authorization** | **string**| Authorization header to identify the B2C user profile. | [optional]
 **profile_token** | **string**| Profile token to identify the guest user profile. | [optional]

### Return type

[**\ProfileService\Client\Model\DsProfileMediaResponse**](../Model/DsProfileMediaResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyAccountEmail**
> verifyAccountEmail($authorization, $ocp_apim_subscription_key)

Verify account email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization header to identify the B2C user profile.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.

try {
    $apiInstance->verifyAccountEmail($authorization, $ocp_apim_subscription_key);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->verifyAccountEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization header to identify the B2C user profile. |
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **writeBusinessTrailEntry**
> \ProfileService\Client\Model\DsBusinesstrailPost200ApplicationJsonResponse writeBusinessTrailEntry($body, $ocp_apim_subscription_key, $accept_timezone)

Write business trail entry

Writes a business trail entry into the business trail table storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyHeader
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');// Configure API key authorization: apiKeyQuery
$config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ProfileService\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new ProfileService\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ProfileService\Client\Model\DsBusinessTrailRequest(); // \ProfileService\Client\Model\DsBusinessTrailRequest | BusinessTrailRequest.
$ocp_apim_subscription_key = "ocp_apim_subscription_key_example"; // string | Subscription key to access the api. Get it on developer.discover.swiss.
$accept_timezone = "accept_timezone_example"; // string | Time zone ID for response dates & times

try {
    $result = $apiInstance->writeBusinessTrailEntry($body, $ocp_apim_subscription_key, $accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->writeBusinessTrailEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ProfileService\Client\Model\DsBusinessTrailRequest**](../Model/DsBusinessTrailRequest.md)| BusinessTrailRequest. | [optional]
 **ocp_apim_subscription_key** | **string**| Subscription key to access the api. Get it on developer.discover.swiss. | [optional]
 **accept_timezone** | **string**| Time zone ID for response dates &amp; times | [optional]

### Return type

[**\ProfileService\Client\Model\DsBusinesstrailPost200ApplicationJsonResponse**](../Model/DsBusinesstrailPost200ApplicationJsonResponse.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

