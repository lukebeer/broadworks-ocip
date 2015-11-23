# Broadworks OCIP PHP docs - <mail@luke.beer> 

> *Easy to use, robust framework for rapid Broadworks OCI development*

## Nutshell

* Requests and Response objects extend abstract base class 'ComplexType'
* 'ComplexType' objects are built up of child elements as described in the schema
* Child elements can be either ComplexType|SimpleType|SimpleContent|TableType|PrimitiveType
* SimpleTypes may contain Restriction objects for input validation such as maxLength of minLength
* Communication with Broadworks uses HTTP SOAP or TCP Stream with an instance of a Transport object
* Automatic ComplexType conversion (userGetResponse17sp4 --> userAddRequest17sp4)
* Client is the main controller for the whole framework to interact with the API
* Designed and commented for auto completion in IDEs, no need for manually trawling the schemas

----------

### Example: Disable CFA for all users in a group
![Screenshot](img/cfa-allingroup.gif)


```
├── Builder
│   ├── Builder.php
│   ├── Restrictions
│   │   ├── Comment.php
│   │   ├── Enumeration.php
│   │   ├── Length.php
│   │   ├── MaxExclusive.php
│   │   ├── MaxInclusive.php
│   │   ├── MaxLength.php
│   │   ├── MinExclusive.php
│   │   ├── MinInclusive.php
│   │   ├── MinLength.php
│   │   ├── Pattern.php
│   │   ├── RestrictionInterface.php
│   │   └── Restriction.php
│   └── Types
│       ├── ComplexInterface.php
│       ├── ComplexType.php
│       ├── PrimitiveType.php
│       ├── SimpleContent.php
│       ├── SimpleInterface.php
│       ├── SimpleType.php
│       ├── TableType.php
│       ├── TypeCheck.php
│       ├── TypeMap.php
│       └── TypeTrait.php
├── Client
│   ├── AsyncClient.php
│   ├── Client.php
│   └── Transport
│       ├── AsyncTransport.php
│       ├── SOAPTransport.php
│       ├── TCPTransport.php
│       └── TransportInterface.php
├── Console
│   ├── CommandGenerator.php
│   └── Console.php
├── Events
│   └── Logger.php
├── Factory.php
├── Listeners
│   └── Connection.php
├── Logging
│   └── ErrorControl.php
├── Output
│   ├── ConsoleOutput.php
│   ├── JSONOutput.php
│   └── OutputInterface.php
├── Response
│   ├── ResponseOutput.php
│   └── Response.php
├── Serializer
│   ├── SerializerInterface.php
│   └── XMLSerializer.php
├── Session
│   └── Session.php
└── utils
    ├── JobControl.php
    └── Parser.php

14 directories, 45 files
```
