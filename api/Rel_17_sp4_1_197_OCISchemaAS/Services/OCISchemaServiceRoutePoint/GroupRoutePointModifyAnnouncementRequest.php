<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceModify17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a route point's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointModifyAnnouncementRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupRoutePointModifyAnnouncementRequest';
    protected $serviceUserId;
    protected $mediaOnHoldSource;

    public function __construct(
         $serviceUserId = '',
         CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setMediaOnHoldSource($mediaOnHoldSource);
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
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource = null)
    {
        $this->mediaOnHoldSource = ($mediaOnHoldSource InstanceOf CallCenterMediaOnHoldSourceModify17)
             ? $mediaOnHoldSource
             : new CallCenterMediaOnHoldSourceModify17($mediaOnHoldSource);
        $this->mediaOnHoldSource->setName('mediaOnHoldSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource;
    }
}
