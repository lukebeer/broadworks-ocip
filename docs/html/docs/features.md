## Features

#### <i class="icon-file"></i> SOAP or TCP Stream transport
It's now possible to choose between SOAP over HTTPS or a TCP stream (default) for interaction with the Broadworks API. Basic benchmarks suggest 15/requests/second with SOAP and 150/requests/second for TCP Stream. UserGetRequest17sp4 was used for the benchmark.


#### <i class="icon-folder-open"></i> Session management
Sessions can be exported out of and into the Client, this was added to allow Broadworks OCI-P scripts triggered by methods such as cronjobs to execute using external session data. Porting Sessions are a secure way to execute commands as the user that requested it as the password is not stored, cookies/sessionId are used for authentication.

#### <i class="icon-pencil"></i> IDE Autocompletion

All elements of the framework have been built with IDE autocompletion in mind so there isn't a need to remember the details of a data type.

#### <i class="icon-refresh"></i>Interactive console
An interacting CLI is built in that requires zero programming knowledge. The user navigates through the schema in the same way you would directories and files on a linux file system. Commands can be executed in the CLI with results printed to screen. Tab autocompletion works.

#### <i class="icon-hdd"></i> Data export

Objects support serialisation to allow saving of messages in plain-text format that can be unserialised back into data types the framework can understand then replayed back into Broadworks for example
