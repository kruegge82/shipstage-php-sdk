# # Data

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**packages** | [**\kruegge82\shipstage\Model\TNTPackage[]**](TNTPackage.md) |  |
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
**service_code** | **string** | TNT Express (tnt_express), TNT Express 9:00 (tnt_express9), TNT Express 10:00 (tnt_express10), TNT Express 12:00 (tnt_express12), TNT Economy Express (tnt_economy) |
**autopay** | **bool** | Set \&quot;true\&quot; to generate label automatically | [optional] [default to false]
**save_address** | **bool** | Set \&quot;true\&quot; to save receiver address in address book | [optional] [default to false]
**insurance_amount** | **float** | Value in EUR |
**insurance_content** | **string** |  |
**insurance_used_item** | **bool** |  | [optional]
**cod_amount** | **float** |  | [optional]
**cod_reason** | **string** |  | [optional]
**return_service** | **bool** | Not compatible with other services | [optional]
**pickup_date** | **string** | Pickup date must be in format DD.MM.YYYY (required for IDS, TNT and GLS Pick &amp; Ship) |
**shipment_type** | **string** | Handelsware (COMMERCIAL_GOODS), Dokumente (DOCUMENT), Warenmuster (COMMERCIAL_SAMPLE), Warenrücksendung (RETURN_OF_GOODS), Geschenk (PRESENT) | [optional]
**invoice_number** | **string** |  | [optional]
**terms_of_shipment** | [**\kruegge82\shipstage\Model\TermsOfShipment**](TermsOfShipment.md) |  | [optional]
**is_b2c** | **bool** | Residential delivery service | [optional]
**is_saturday_delivery** | **bool** | Saturday Delivery | [optional]
**carbon_neutral** | **bool** | UPS Carbon CO2-Neutral | [optional]
**reference** | **string** |  | [optional]
**outlet_routing** | **bool** | Parcel outlet routing (receiver email is required) | [optional]
**bulky_goods** | **bool** | Bulky goods | [optional]
**premium** | **bool** | Premium (for DHL Warenpost only) | [optional]
**check_age_service** | **int** | Visual age check service | [optional]
**endorsement** | [**\kruegge82\shipstage\Model\Endorsement**](Endorsement.md) |  | [optional]
**pickup_time** | [**\kruegge82\shipstage\Model\PickupTime**](PickupTime.md) |  |
**delivery_date** | **string** |  | [optional]
**sendung_avisieren** | **string** | Phone number |
**hinweis1** | **string** |  | [optional]
**hinweis2** | **string** |  | [optional]
**amazon_buchungsdaten** | **string** |  | [optional]
**stackable** | **string** |  |
**dangerous_goods_type** | [**\kruegge82\shipstage\Model\DangerousGoodType**](DangerousGoodType.md) |  | [optional]
**un_number** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
