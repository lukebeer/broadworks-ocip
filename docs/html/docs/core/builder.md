## Broadworks_OCIP\core\Builder\Builder

The Builder's purpose is to generate an XML payload Broadworks understands from the data passed in.
Typically a ComplexType object (more on these later) would be passed into the Builder but raw XML can be passed in too.
Raw XML would be passed in so it can be wrapped in a Broadsoft envelope with a valid session id.