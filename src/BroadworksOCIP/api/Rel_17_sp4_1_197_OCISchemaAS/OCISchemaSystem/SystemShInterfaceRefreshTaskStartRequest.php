<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Dispatches the system refresh task on the local Application Server node.  At most one instance of the system refresh task may run on an Application Server node at a given point in time.  If the system refresh task is already running when this request is made, an ErrorResponse is returned.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemShInterfaceRefreshTaskStartRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemShInterfaceRefreshTaskStartRequest';

    public function __construct(    ) {
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
