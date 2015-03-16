<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\ShInterfaceUserIdDataEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserShInterfaceGetUserIdDataRequest.
 *         The response contains the Sh non-transparent data for the specified userId.
 *         The data also includes a userType, publicUserIdentity and endpointType.
 */
class UserShInterfaceGetUserIdDataResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserShInterfaceGetUserIdDataResponse';
    protected $entry;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserShInterfaceGetUserIdDataResponse $response
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
        $this->entry->setName('entry');
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
