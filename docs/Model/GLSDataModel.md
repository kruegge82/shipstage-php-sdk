# # GLSDataModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**packages** | [**\kruegge82\shipstage\Model\GLSPackage[]**](GLSPackage.md) |  |
**from_country** | **string** |  |
**from_contact_name** | **string** |  |
**from_company_name** | **string** |  | [optional]
**from_address** | **string** |  |
**from_additional_address** | **string** |  | [optional]
**from_state** | [**\kruegge82\shipstage\Model\State**](State.md) |  | [optional]
**from_postal_code** | **string** |  |
**from_city** | **string** |  |
**from_phone** | **string** |  | [optional]
**from_email** | **string** |  | [optional]
**to_country** | **string** |  |
**to_contact_name** | **string** |  |
**to_company_name** | **string** |  | [optional]
**to_address** | **string** |  |
**to_additional_address** | **string** |  | [optional]
**to_state** | [**\kruegge82\shipstage\Model\State**](State.md) |  | [optional]
**to_postal_code** | **string** |  |
**to_city** | **string** |  |
**to_phone** | **string** |  | [optional]
**to_email** | **string** |  | [optional]
**service_code** | **string** | GLS Standard (aa), GLS Letterbox (gls_letterbox), GLS Pick &amp; Ship (gls_pickandship) |
**autopay** | **bool** | Set \&quot;true\&quot; to generate label automatically | [optional] [default to false]
**save_address** | **bool** | Set \&quot;true\&quot; to save receiver address in address book | [optional] [default to false]
**insurance_amount** | **float** | Value in EUR | [optional]
**insurance_content** | **string** |  | [optional]
**insurance_used_item** | **bool** |  | [optional]
**cod_amount** | **float** |  | [optional]
**cod_reason** | **string** |  | [optional]
**return_service** | **bool** | Not compatible with other services | [optional]
**pickup_date** | **string** | Pickup date must be in format DD.MM.YYYY (required for IDS, TNT and GLS Pick &amp; Ship) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
