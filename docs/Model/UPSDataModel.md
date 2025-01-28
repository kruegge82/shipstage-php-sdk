# # UPSDataModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**packages** | [**\kruegge82\shipstage\Model\UPSPackage[]**](UPSPackage.md) |  |
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
**service_code** | **string** | UPS Standard (11), UPS Saver (65), UPS Express 10:30 (07), UPS Express 12:00 (74) |
**autopay** | **bool** | Set \&quot;true\&quot; to generate label automatically | [optional] [default to false]
**save_address** | **bool** | Set \&quot;true\&quot; to save receiver address in address book | [optional] [default to false]
**shipment_type** | **string** | Handelsware (SALE), Geschenk (GIFT), Warenmuster (SAMPLE), Warenrücksendung (RETURN), Reparatur (REPAIR), Dokumente (DOCUMENTS) | [optional]
**invoice_number** | **string** |  | [optional]
**terms_of_shipment** | [**\kruegge82\shipstage\Model\TermsOfShipment**](TermsOfShipment.md) |  | [optional]
**insurance_amount** | **float** | Value in EUR | [optional]
**insurance_content** | **string** |  | [optional]
**insurance_used_item** | **bool** |  | [optional]
**cod_amount** | **float** |  | [optional]
**cod_reason** | **string** |  | [optional]
**is_b2c** | **bool** | Residential delivery service | [optional]
**is_saturday_delivery** | **bool** | Saturday Delivery | [optional]
**carbon_neutral** | **bool** | UPS Carbon CO2-Neutral | [optional]
**return_service** | **bool** | Not compatible with other services | [optional]
**reference** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
