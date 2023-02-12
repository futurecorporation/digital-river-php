# # FileLink

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the file link. | [optional]
**created_time** | **\DateTime** | Time when the file link was created. | [optional]
**expired** | **bool** | Whether this link has already expired. | [optional]
**expires_time** | **\DateTime** | Time at which the link expires. | [optional]
**file_id** | **string** | The file object this link points to. | [optional]
**live_mode** | **bool** | Has the value true if the object exists in live mode or the value false if the object exists in test mode. | [optional]
**metadata** | **array<string,mixed>** | Key-value pairs used to store additional data. Value can be string, boolean or integer types. | [optional]
**url** | **string** | The publicly accessible URL to download the file. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
