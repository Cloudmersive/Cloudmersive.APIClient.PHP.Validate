# LeadEnrichmentResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**successful** | **bool** | True if the operation was successful, false otherwise | [optional] 
**lead_type** | **string** | The type of the lead; possible types are Junk (a single individual using a disposable/throwaway email address); Individual (a single individual, typically a consumer, not purchasing on behalf of a business); SmallBusiness (a small business, typically with fewer than 100 employees); MediumBusiness (a medium business, larger than 100 employees but fewer than 1000 employees); Enterprise (a large business with greater than 1000 employees); Business (a business customer of unknown size) | [optional] 
**contact_business_email** | **string** | The person&#39;s business email address for the lead | [optional] 
**contact_first_name** | **string** | The person&#39;s first name for the lead | [optional] 
**contact_last_name** | **string** | The person&#39;s last name for the lead | [optional] 
**contact_gender** | **string** | Gender for contact name; possible values are Male, Female, and Neutral (can be applied to Male or Female).  Requires ContactFirstName. | [optional] 
**company_name** | **string** | Name of the company for the lead | [optional] 
**company_domain_name** | **string** | Domain name / website for the lead | [optional] 
**company_house_number** | **string** | House number of the address of the company for the lead | [optional] 
**company_street** | **string** | Street name of the address of the company for the lead | [optional] 
**company_city** | **string** | City of the address of the company for the lead | [optional] 
**company_state_or_province** | **string** | State or Province of the address of the company for the lead | [optional] 
**company_postal_code** | **string** | Postal Code of the address of the company for the lead | [optional] 
**company_country** | **string** | Country Name of the address of the company for the lead | [optional] 
**company_country_code** | **string** | Country Code (2-letter ISO 3166-1) of the address of the company for the lead | [optional] 
**company_telephone** | **string** | Telephone of the company office for the lead | [optional] 
**company_vat_number** | **string** | VAT number of the company for the lead | [optional] 
**employee_count** | **int** | Count of employees at the company (estimated), if available | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


