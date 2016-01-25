# Broadworks OCI-P PHP Framework

## PHP Framework for the Broadworks OCI Provisioning API

Countless hours spent on this rather than on my (ex)missus means rent/bills are now double, donations welcome :)
- https://luke.beer
- bitcoin:1kNfDVdH9JxSL9e882Fk9Lo5r4EKZ1FZZ
- paypal:eat.lemons@gmail.com


## Features


#### <i class="icon-file"></i> SOAP or TCP Stream transport
It's now possible to choose between SOAP over HTTPS or a TCP stream (default) for interaction with the Broadworks API. Basic benchmarks suggest 15/requests/second with SOAP and 150/requests/second for TCP Stream. UserGetRequest17sp4 was used for the benchmark.


#### <i class="icon-folder-open"></i> Session management
Sessions can be exported out of and into the Client, this was added to allow Broadworks OCI-P scripts triggered by methods such as cronjobs to execute using external session data. Porting Sessions are a secure way to execute commands as the user that requested it as the password is not stored, cookies/sessionId are used for authentication.


#### <i class="icon-pencil"></i> IDE Autocompletion

All elements of the framework have been built with IDE autocompletion in mind so there isn't a need to remember the details of a data type, below is an example of disabling CallForwardingAlways for all users within a group.
![](http://lukebeer.github.io/broadworks-ocip/img/cfa-allingroup.gif)

#### <i class="icon-refresh"></i>Interactive console
An interacting CLI is built in that requires zero programming knowledge. The user navigates through the schema in the same way you would directories and files on a linux file system. Commands can be executed in the CLI with results printed to screen. Tab autocompletion works - (broken in latest release)


#### <i class="icon-hdd"></i> Data export

Objects support serialisation to allow saving of messages in plain-text format that can be unserialised back into data types the framework can understand then replayed back into Broadworks for example



----------
- Friendlier alternative to writing XML directly
- PHP classes generated from XSD schema files
- SOAP transport support, good for unreliable connections
- TCP stream transport support provides minimal overhead & maximum throughput 
- SimpleTypes may contain Restriction objects for input validation such as maxLength of minLength
- Automatic mapping of data types (userGetResponse17sp4 --> userAddRequest17sp4)
- Blood, sweat and tears from countless hours of my time when I should of been at the pub

-------
## Installation

```
$ composer require lukebeer/broadworks-ocip:dev-master
```
-----
## Basic usage

``` php
<?php
require_once 'vendor/autoload.php';

// Use the ComplexType required for this example.
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserServiceGetAssignmentListRequest;

// Create a Client and login. CoreFactory also has getSOAPClient()
$client = Broadworks_OCIP\CoreFactory::getTCPClient('ocip.example.com');
$client->login('user', 'pass');

// Generate a request, send and assign the response to $response
$request  = new UserServiceGetAssignmentListRequest('example@example.com');
$response = $request->get($client);

// This response type returns a TableType object, getValue() renders a table.
echo $response->getServicePacksAssignmentTable()->getValue();
?>

/* Spits out:
+--------------------------------------------------+----------+
| Service Name                                     | Assigned |
+--------------------------------------------------+----------+
| Anonymous Call Rejection                         | true     |
| Authentication                                   | true     |
| Call Forwarding Always                           | true     |
| Call Forwarding Busy                             | true     |
| Call Forwarding No Answer                        | true     |
| Call Notify                                      | false    |
| Calling Line ID Delivery Blocking                | true     |
| CommPilot Express                                | true     |
| CommPilot Call Manager                           | true     |
| Do Not Disturb                                   | true     |
| Intercept User                                   | true     |
| Last Number Redial                               | true     |
| Sequential Ring                                  | true     |
+--------------------------------------------------+----------+
*/
```
-----
## Main response types

### ComplexType

ComplexTypes such as UserGetRequest17sp4 are types that may contain a mixture of element types including ComplexTypes.
Think of them as XML with nested children.

If one of the elements to be set is a ComplexType, the ComplexType needs creating before being set in the parent object.
For example, StreetAddress is a ComplexType:
``` php
<?php

$address = new StreetAddress();
$address->setAddressLine1('1337 Street');
$address->setCountry('England');

$request = new UserAddRequest17sp4();
$request->setStreetAddress($address);
```

#### ComplexType StreetAddress structure
```
Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress Object
(
    [elementName] => StreetAddress
    [addressLine1:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
        (
            [annontation:protected] => 
            [attributes:protected] => 
            [restrictions:protected] => Array
                (
                    [0] => Broadworks_OCIP\core\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] => 
                        )

                    [1] => Broadworks_OCIP\core\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 80
                            [detail:protected] => 
                        )

                )

            [errors:protected] => 
            [elementValue:protected] => 1337 Street
            [elementName:protected] => addressLine1
        )

    [addressLine2:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
        (
            [annontation:protected] => 
            [attributes:protected] => 
            [restrictions:protected] => Array
                (
                    [0] => Broadworks_OCIP\core\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] => 
                        )

                    [1] => Broadworks_OCIP\core\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 80
                            [detail:protected] => 
                        )

                )

            [errors:protected] => 
            [elementValue:protected] => 
            [elementName:protected] => addressLine2
        )

    [city:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
        (
            [annontation:protected] => 
            [attributes:protected] => 
            [restrictions:protected] => Array
                (
                    [0] => Broadworks_OCIP\core\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] => 
                        )

                    [1] => Broadworks_OCIP\core\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 50
                            [detail:protected] => 
                        )

                )

            [errors:protected] => 
            [elementValue:protected] => 
            [elementName:protected] => city
        )

    [stateOrProvince:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
        (
            [annontation:protected] => 
            [attributes:protected] => 
            [restrictions:protected] => Array
                (
                    [0] => Broadworks_OCIP\core\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] => 
                        )

                    [1] => Broadworks_OCIP\core\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 50
                            [detail:protected] => 
                        )

                )

            [errors:protected] => 
            [elementValue:protected] => 
            [elementName:protected] => stateOrProvince
        )

    [stateOrProvinceDisplayName:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
        (
            [annontation:protected] => 
            [attributes:protected] => 
            [restrictions:protected] => Array
                (
                    [0] => Broadworks_OCIP\core\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] => 
                        )

                    [1] => Broadworks_OCIP\core\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 50
                            [detail:protected] => 
                        )

                )

            [errors:protected] => 
            [elementValue:protected] => 
            [elementName:protected] => stateOrProvinceDisplayName
        )

    [zipOrPostalCode:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
        (
            [annontation:protected] => 
            [attributes:protected] => 
            [restrictions:protected] => Array
                (
                    [0] => Broadworks_OCIP\core\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] => 
                        )

                    [1] => Broadworks_OCIP\core\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 50
                            [detail:protected] => 
                        )

                )

            [errors:protected] => 
            [elementValue:protected] => 
            [elementName:protected] => zipOrPostalCode
        )

    [country:protected] => Broadworks_OCIP\core\Builder\Types\SimpleContent Object
        (
            [annontation:protected] => 
            [attributes:protected] => 
            [restrictions:protected] => Array
                (
                    [0] => Broadworks_OCIP\core\Builder\Restrictions\MinLength Object
                        (
                            [value:protected] => 1
                            [detail:protected] => 
                        )

                    [1] => Broadworks_OCIP\core\Builder\Restrictions\MaxLength Object
                        (
                            [value:protected] => 50
                            [detail:protected] => 
                        )

                )

            [errors:protected] => 
            [elementValue:protected] => Enngland
            [elementName:protected] => country
        )

    [elements:protected] => Array
        (
        )

    [responseType:protected] => 
    [errors:protected] => 
    [params:protected] => Array
        (
        )

    [args:protected] => 
    [elementValue:protected] => 
)

```

### TableType

TableTypes are used for handling OCITable data. A single dimension array is passed in for column headings and data is
 set by using addRow or addRows with single or multi dimension arrays.
 
It's possible to render a pretty ascii table with `echo $table->getValue()` with the data and also search with 
`$table->findRow('something')`

If only a single column is required, method `$table->getColumn($id)` will return a specific column of data from all 
rows in the dataset. One value can be used for keys and another for values.

``` php
<?php
$data = $table->getColummn(0, 3);
$newTable = new TableType(['User Id', 'Phone Number');
$newTable->addRows($data);
echo $newTable->getValue();
```
Returns:
```
+------------------------+---------------+
| User Id                | Phone Number  |
+------------------------+---------------+
| user-1@example.com     | 01234123456   |
| user-2@example.com     | 01234123456   |
| user-3@example.com     | 01234123456   |
| user-4@example.com     | 01234123456   |
| user-5@example.com     | 01234123456   |
| user-6@example.com     | 01234123456   |
+------------------------+---------------+
```
-----

## Contributing

#### Bug Reports & Feature Requests

Please use the [issue tracker](https://github.com/lukebeer/broadworks-ocip/issues) to report any bugs or file feature requests.

#### Developing

PRs are welcome. To begin developing, do this:

```bash
$ curl -X POST -u "GITHUB_USERNAME:GITHUB_PASSWORD"  https://api.github.com/repos/lukebeer/broadworks-ocip/forks && history -c
$ git clone github:GITHUB_USERNAME/broadworks-ocip &&
$ cd broadworks-ocip
```
-------
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
