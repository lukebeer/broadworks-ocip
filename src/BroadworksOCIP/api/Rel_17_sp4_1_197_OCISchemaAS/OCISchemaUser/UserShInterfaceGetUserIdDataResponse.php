<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\ShInterfaceUserIdDataEntry;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserShInterfaceGetUserIdDataRequest.
 *         The response contains the Sh non-transparent data for the specified userId.
 *         The data also includes a userType, publicUserIdentity and endpointType.
 */
class UserShInterfaceGetUserIdDataResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserShInterfaceGetUserIdDataResponse';
    protected $entry;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserShInterfaceGetUserIdDataResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEntry(ShInterfaceUserIdDataEntry $entry = null)
    {
        $this->entry = ($entry InstanceOf ShInterfaceUserIdDataEntry)
             ? $entry
             : new ShInterfaceUserIdDataEntry($entry);
        $this->entry->setElementName('entry');
        return $this;
    }

    /**
     * 
     * @return ShInterfaceUserIdDataEntry $entry
     */
    public function getEntry()
    {
        return $this->entry;
    }
}
