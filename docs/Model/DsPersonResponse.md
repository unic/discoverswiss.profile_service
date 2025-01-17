# DsPersonResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**has_verified_account** | **bool** | Indicates if the account was verified. In this case, the IdentificationLevel is equals EmailVerified or better. | [optional] 
**has_verified_email** | **bool** | Indicates if the correspondence E-Mail-Address (email property on the person) was verified. | [optional] 
**has_private_email** | **bool** | Indicates if the user has a private E-Mail-Address. In this case you need to register the sender&#x27;s E-Mail-Address otherwise the E-Mail will be blocked. Please contact discover.swiss support for onboarding. | [optional] 
**identification_level** | **string** |  | [optional] 
**data_governance** | [**\ProfileService\Client\Model\DsDataGovernanceResponse**](DsDataGovernanceResponse.md) |  | [optional] 
**state** | **string** |  | [optional] 
**profile_id** | **string** |  | [optional] 
**additional_name** | **string** |  | [optional] 
**address** | [**\ProfileService\Client\Model\DsPostalAddressResponse**](DsPostalAddressResponse.md) |  | [optional] 
**email** | **string** | Correspondence E-Mail-Address used for Order confirmation and similar communication. Doesn&#x27;t necessarily need to match the Account E-Mail-Address. | [optional] 
**family_name** | **string** |  | [optional] 
**alternate_name** | **string** |  | [optional] 
**fax_number** | **string** |  | [optional] 
**gender** | **string** |  | [optional] 
**given_name** | **string** |  | [optional] 
**nationality** | **string** |  | [optional] 
**birth_date** | **string** |  | [optional] 
**telephone** | **string** |  | [optional] 
**display_name** | **string** |  | [optional] 
**is_guest** | **string** |  | [optional] 
**passport** | **string** |  | [optional] 
**marital_status** | **string** |  | [optional] 
**mobile_phone** | **string** |  | [optional] 
**salutation** | **string** |  | [optional] 
**reduction** | **string** |  | [optional] 
**preferred_language** | **string** |  | [optional] 
**profile_image** | **string** | Represents image identifier. Call media service to get or delete image | [optional] 
**works_for_name** | **string** |  | [optional] 
**created_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**last_modified** | [**\DateTime**](\DateTime.md) |  | [optional] 
**last_modified_by** | **string** |  | [optional] 
**created_by_subscription** | **string** |  | [optional] 
**last_modified_by_subscription** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

