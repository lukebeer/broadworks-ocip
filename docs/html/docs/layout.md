## Project layout
```
 Builder
  Builder.php                # Takes a ComplexType and converts to XML or XML string then wraps it in an envelope ready for shipping.
  Restrictions
   Enumeration.php           # Defines a list of acceptable values.
   Length.php                # Specifies the exact number of characters or list items allowed. Must be equal to or greater than zero.
   MaxExclusive.php          # Specifies the upper bounds for numeric values (the value must be less than this value).
   MaxInclusive.php          # Specifies the upper bounds for numeric values (the value must be less than or equal to this value).
   MaxLength.php             # Specifies the maximum number of characters or list items allowed. Must be equal to or greater than zero.
   MinExclusive.php          # Specifies the lower bounds for numeric values (the value must be greater than this value).
   MinInclusive.php          # Specifies the lower bounds for numeric values (the value must be greater than or equal to this value).
   MinLength.php             # Specifies the minimum number of characters or list items allowed. Must be equal to or greater than zero.
   Pattern.php               # Defines the exact sequence of characters that are acceptable.
   Restriction.php           # Abstract base class all restrictions must extend.
   RestrictionInterface.php  # Interface all Restrictins must implement.
  Types
   ComplexInterface.php      # Interface all ComplexTypes must implement.
   ComplexType.php           # Defines a complex type element.
   PrimitiveType.php         # Primitive type such as bool/int/string.
   SimpleContent.php         # Contains extensions or restrictions on a text-only complex type or on a simple type as content and contains no elements.
   SimpleInterface.php       # Interface all SimpleTypes must implement.
   SimpleType.php            # Defines a simple type and specifies the constraints and information about the values of attributes or text-only elements.
   TableType.php             # Used for OCITable responses only, never in requests.
   TypeCheck.php             # Not implemented yet.
   TypeMap.php               # Converts xs types to PHP types.
   TypeTrait.php             # Common trait all types have.
 Client
  Client.php                 # Main controller for the whole framework exposing methods for requests and responses.
  Transport
   SOAPTransport.php         # Communicates with Broadworks via http(s), this is the slowest but most robust transport type.
   TCPTransport.php          # Communicates with Broadworks via a TCPStream on port 2208, this is the fastest transport type.
   TransportInterface.php    # Interface all Transport types must implement.
 Console
  Console.php                # Generates an array of commands for the interactive console.
 Logging
  ErrorControl.php           # Crappy logging object, needs nuking and starting again.
 Output
  ConsoleOutput.php          # Output type for the interactive console.
  JSONOutput.php             # Generates and echos JSON.
  OutputInterface.php        # Output interface all Outputs must implement.
 Response
  Response.php               # Takes XML input and returns response object specified or false if error.
  ResponseOutput.php         # Convenience class for selecting response output format.
 Serializer
  SerializerInterface.php    # Interface all Serializers must implement.
  XMLSerializer.php          # Converts XML into the requested object type automatically, very much the brain of this.
 Session
  Session.php                # Portable Session object used to store details of the current authenticated session.
```
