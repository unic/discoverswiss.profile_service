# DsProductConfigurationResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product** | [**\ProfileService\Client\Model\DsProductVariantResponse**](DsProductVariantResponse.md) |  | [optional] 
**valid_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**valid_until** | [**\DateTime**](\DateTime.md) |  | [optional] 
**duration** | **string** |  | [optional] 
**number_of_travelers** | **int** |  | [optional] 
**add_on** | [**\ProfileService\Client\Model\DsAddOnConfigurationResponse[]**](DsAddOnConfigurationResponse.md) |  | [optional] 
**traveler** | [**\ProfileService\Client\Model\DsOrderItemTravelerResponse[]**](DsOrderItemTravelerResponse.md) |  | [optional] 
**offer_term** | [**\ProfileService\Client\Model\DsOfferTermResponse[]**](DsOfferTermResponse.md) |  | [optional] 
**fulfillment_options** | [**\ProfileService\Client\Model\DsFulfillmentOptionsResponse**](DsFulfillmentOptionsResponse.md) |  | [optional] 
**price_category** | **string** | It is only set if there are no travelers or all travelers do have the same priceCategory | [optional] 
**price_category_name** | **string** | It is only set if there are no travelers or all travelers do have the same priceCategory | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

