## Broadworks_OCIP\core\Response\Response

The Response class is constructed with response XML from Broadworks then analyised.
Errors go in the ErrorController and false is returned, SuccessResponse (no payload) returns true and responses with XML payload get passed into the Serializer. A ResponseType parameter can be passed into getResponse by the code to return a non-standard response type.

This is used for returning a UserAddRequest17sp4 instead of the default UserGetResponse17sp4 when a UserGetRequest17sp4 has been sent.