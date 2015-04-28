<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCodeActivation;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to set the active status of Call Center Call Disposition Codes.      
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterCallDispositionCodeModifyActiveListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterCallDispositionCodeModifyActiveListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $callDispositionCodeActivation;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $callDispositionCodeActivation = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setCallDispositionCodeActivation($callDispositionCodeActivation);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallDispositionCodeActivation(CallDispositionCodeActivation $callDispositionCodeActivation = null)
    {
        $this->callDispositionCodeActivation = ($callDispositionCodeActivation InstanceOf CallDispositionCodeActivation)
             ? $callDispositionCodeActivation
             : new CallDispositionCodeActivation($callDispositionCodeActivation);
        $this->callDispositionCodeActivation->setElementName('callDispositionCodeActivation');
        return $this;
    }

    /**
     * 
     * @return CallDispositionCodeActivation $callDispositionCodeActivation
     */
    public function getCallDispositionCodeActivation()
    {
        return $this->callDispositionCodeActivation;
    }
}
