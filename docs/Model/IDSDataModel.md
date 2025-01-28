# # IDSDataModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**packages** | [**\kruegge82\shipstage\Model\IDSPackage[]**](IDSPackage.md) |  |
**from_country** | **string** |  |
**from_contact_name** | **string** |  |
**from_company_name** | **string** |  | [optional]
**from_address** | **string** |  |
**from_additional_address** | **string** |  | [optional]
**from_state** | [**\kruegge82\shipstage\Model\State**](State.md) |  | [optional]
**from_postal_code** | **string** |  |
**from_city** | **string** |  |
**from_phone** | **string** |  |
**from_email** | **string** |  | [optional]
**to_country** | **string** |  |
**to_contact_name** | **string** |  |
**to_company_name** | **string** |  | [optional]
**to_address** | **string** |  |
**to_additional_address** | **string** |  | [optional]
**to_state** | [**\kruegge82\shipstage\Model\State**](State.md) |  | [optional]
**to_postal_code** | **string** |  |
**to_city** | **string** |  |
**to_phone** | **string** |  |
**to_email** | **string** |  | [optional]
**service_code** | **string** | IDS Standard (ids), IDS FIX (97), IDS Express 8:00 (94), IDS Express 10:00 (90), IDS Express 12:00 (92) |
**autopay** | **bool** | Set \&quot;true\&quot; to generate label automatically | [optional] [default to false]
**save_address** | **bool** | Set \&quot;true\&quot; to save receiver address in address book | [optional] [default to false]
**pickup_date** | **string** | Pickup date must be in format DD.MM.YYYY (required for IDS, TNT and GLS Pick &amp; Ship) |
**pickup_time** | [**\kruegge82\shipstage\Model\PickupTime**](PickupTime.md) |  |
**is_b2c** | **bool** | Residential delivery service | [optional]
**insurance_amount** | **float** | Value in EUR |
**insurance_content** | **string** |  |
**insurance_used_item** | **bool** |  | [optional]
**delivery_date** | **string** |  | [optional]
**sendung_avisieren** | **string** | Phone number | [optional]
**hinweis1** | **string** |  | [optional]
**hinweis2** | **string** |  | [optional]
**amazon_buchungsdaten** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
