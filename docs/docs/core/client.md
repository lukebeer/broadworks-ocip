## Broadworks_OCIP\core\Client\Client

The Client is the main class a user would interact with. It's the controller used to manage and construct the other core components.
The Client is used for logging in, sending requests and fetching responses aside many other features that will be demonstraighted throughout this guide.

#### Client init
``` php
<?php
require_once 'Broadworks_OCIP/common.php';

use Broadworks_OCIP\core\Client\Transport\TCPTransport;
use Broadworks_OCIP\core\Client\Client;
use Broadworks_OCIP\CoreFactory;


$transport = new TCPTransport('ocip.example.com');
$client    = new Client($transport);

/* Or use CoreFactory to do the same thing in a single line */
$lazyClient = CoreFactory::getTCPClient('ocip.example.com');

print_r($client);
```

#### Client basic structure
```
Broadworks_OCIP\core\Client\Client Object
(
    [ociBuilder] => Broadworks_OCIP\core\Builder\Builder Object
        (
            [session] => Broadworks_OCIP\core\Session\Session Object
                (
                    [url:Broadworks_OCIP\core\Session\Session:private] => 
                    [userId:Broadworks_OCIP\core\Session\Session:private] => 
                    [pass:Broadworks_OCIP\core\Session\Session:private] => 
                    [sessionId:Broadworks_OCIP\core\Session\Session:private] => 583420997019857152
                    [nonce:Broadworks_OCIP\core\Session\Session:private] => 
                    [cookie:Broadworks_OCIP\core\Session\Session:private] => 
                    [loggedIn:Broadworks_OCIP\core\Session\Session:private] => 
                    [transport:Broadworks_OCIP\core\Session\Session:private] => TCP
                    [clearpass:Broadworks_OCIP\core\Session\Session:private] => 
                )

        )

    [session:Broadworks_OCIP\core\Client\Client:private] => Broadworks_OCIP\core\Session\Session Object
        (
            [url:Broadworks_OCIP\core\Session\Session:private] => 
            [userId:Broadworks_OCIP\core\Session\Session:private] => 
            [pass:Broadworks_OCIP\core\Session\Session:private] => 
            [sessionId:Broadworks_OCIP\core\Session\Session:private] => 583420997019857152
            [nonce:Broadworks_OCIP\core\Session\Session:private] => 
            [cookie:Broadworks_OCIP\core\Session\Session:private] => 
            [loggedIn:Broadworks_OCIP\core\Session\Session:private] => 
            [transport:Broadworks_OCIP\core\Session\Session:private] => TCP
            [clearpass:Broadworks_OCIP\core\Session\Session:private] => 
        )

    [timeout:Broadworks_OCIP\core\Client\Client:private] => 4
    [autoLogout:Broadworks_OCIP\core\Client\Client:private] => 1
    [requestMsg:Broadworks_OCIP\core\Client\Client:private] => 
    [responseType:Broadworks_OCIP\core\Client\Client:private] => 
    [appendToResponse:Broadworks_OCIP\core\Client\Client:private] => Array
        (
        )

    [transport] => Broadworks_OCIP\core\Client\Transport\TCPTransport Object
        (
            [response] => 
            [session:protected] => Broadworks_OCIP\core\Session\Session Object
                (
                    [url:Broadworks_OCIP\core\Session\Session:private] => 
                    [userId:Broadworks_OCIP\core\Session\Session:private] => 
                    [pass:Broadworks_OCIP\core\Session\Session:private] => 
                    [sessionId:Broadworks_OCIP\core\Session\Session:private] => 583420997019857152
                    [nonce:Broadworks_OCIP\core\Session\Session:private] => 
                    [cookie:Broadworks_OCIP\core\Session\Session:private] => 
                    [loggedIn:Broadworks_OCIP\core\Session\Session:private] => 
                    [transport:Broadworks_OCIP\core\Session\Session:private] => TCP
                    [clearpass:Broadworks_OCIP\core\Session\Session:private] => 
                )

            [socket:Broadworks_OCIP\core\Client\Transport\TCPTransport:private] => Resource id #22
            [pending:Broadworks_OCIP\core\Client\Transport\TCPTransport:private] => 
        )

    [errorControl] => Broadworks_OCIP\core\Logging\ErrorControl Object
        (
            [errors:protected] => 
            [lastError:protected] => 
        )

)
```