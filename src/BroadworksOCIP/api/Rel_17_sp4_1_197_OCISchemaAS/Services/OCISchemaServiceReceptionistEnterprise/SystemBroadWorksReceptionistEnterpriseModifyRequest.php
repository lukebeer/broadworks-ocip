<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceReceptionistEnterprise; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaximumMonitoredUsers;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify BroadWorks Receptionist - Enterprise settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBroadWorksReceptionistEnterpriseModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBroadWorksReceptionistEnterpriseModifyRequest';
    protected $maxMonitoredUsers;

    public function __construct(
         $maxMonitoredUsers = null
    ) {
        $this->setMaxMonitoredUsers($maxMonitoredUsers);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMaxMonitoredUsers($maxMonitoredUsers = null)
    {
        $this->maxMonitoredUsers = ($maxMonitoredUsers InstanceOf MaximumMonitoredUsers)
             ? $maxMonitoredUsers
             : new MaximumMonitoredUsers($maxMonitoredUsers);
        $this->maxMonitoredUsers->setElementName('maxMonitoredUsers');
        return $this;
    }

    /**
     * 
     * @return MaximumMonitoredUsers $maxMonitoredUsers
     */
    public function getMaxMonitoredUsers()
    {
        return ($this->maxMonitoredUsers)
            ? $this->maxMonitoredUsers->getElementValue()
            : null;
    }
}
