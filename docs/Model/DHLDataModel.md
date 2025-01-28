# # DHLDataModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**packages** | [**\kruegge82\shipstage\Model\DHLPackage[]**](DHLPackage.md) |  |
**from_country** | **string** |  |
**from_contact_name** | **string** |  |
**from_company_name** | **string** |  | [optional]
**from_address** | **string** |  |
**from_additional_address** | **string** |  | [optional]
**from_state** | [**\kruegge82\shipstage\Model\State**](State.md) |  | [optional]
**from_postal_code** | **string** |  | [optional]
**from_city** | **string** |  |
**from_phone** | **string** |  | [optional]
**from_email** | **string** |  | [optional]
**to_country** | **string** |  |
**to_contact_name** | **string** |  |
**to_company_name** | **string** |  | [optional]
**to_address** | **string** |  |
**to_additional_address** | **string** |  | [optional]
**to_state** | [**\kruegge82\shipstage\Model\State**](State.md) |  | [optional]
**to_postal_code** | **string** |  | [optional]
**to_city** | **string** |  |
**to_phone** | **string** |  | [optional]
**to_email** | **string** |  | [optional]
**service_code** | **string** | DHL Paket (dhl_paket), DHL Warenpost (dhl_warenpost), DHL Kleinpaket (dhl_kleinpaket) |
**autopay** | **bool** | Set \&quot;true\&quot; to generate label automatically | [optional] [default to false]
**save_address** | **bool** | Set \&quot;true\&quot; to save receiver address in address book | [optional] [default to false]
**shipment_type** | **string** | Handelsware (COMMERCIAL_GOODS), Dokumente (DOCUMENT), Warenmuster (COMMERCIAL_SAMPLE), Warenrücksendung (RETURN_OF_GOODS), Geschenk (PRESENT) | [optional]
**invoice_number** | **string** |  | [optional]
**terms_of_shipment** | [**\kruegge82\shipstage\Model\TermsOfShipment**](TermsOfShipment.md) |  | [optional]
**insurance_amount** | **float** | Value in EUR | [optional]
**insurance_content** | **string** |  | [optional]
**insurance_used_item** | **bool** |  | [optional]
**cod_amount** | **float** |  | [optional]
**cod_reason** | **string** |  | [optional]
**outlet_routing** | **bool** | Parcel outlet routing (receiver email is required) | [optional]
**bulky_goods** | **bool** | Bulky goods | [optional]
**premium** | **bool** | Premium (for DHL Warenpost only) | [optional]
**check_age_service** | **int** | Visual age check service | [optional]
**endorsement** | [**\kruegge82\shipstage\Model\Endorsement**](Endorsement.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
