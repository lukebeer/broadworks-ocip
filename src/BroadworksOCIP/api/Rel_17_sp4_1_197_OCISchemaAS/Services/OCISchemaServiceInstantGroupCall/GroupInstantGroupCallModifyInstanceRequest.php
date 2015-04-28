<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantGroupCall; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantGroupCall\InstantGroupCallAnswerTimeoutMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementOutgoingDNorSIPURIList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify an Instant Group Call service instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupInstantGroupCallModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupInstantGroupCallModifyInstanceRequest';
    protected $serviceUserId;
    protected $serviceInstanceProfile;
    protected $destinationPhoneNumberList;
    protected $isAnswerTimeoutEnabled;
    protected $answerTimeoutMinutes;

    public function __construct(
         $serviceUserId = '',
         $serviceInstanceProfile = null,
         $destinationPhoneNumberList = null,
         $isAnswerTimeoutEnabled = null,
         $answerTimeoutMinutes = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setDestinationPhoneNumberList($destinationPhoneNumberList);
        $this->setIsAnswerTimeoutEnabled($isAnswerTimeoutEnabled);
        $this->setAnswerTimeoutMinutes($answerTimeoutMinutes);
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
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceModifyProfile)
             ? $serviceInstanceProfile
             : new ServiceInstanceModifyProfile($serviceInstanceProfile);
        $this->serviceInstanceProfile->setElementName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceModifyProfile $serviceInstanceProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setDestinationPhoneNumberList(ReplacementOutgoingDNorSIPURIList $destinationPhoneNumberList = null)
    {
        $this->destinationPhoneNumberList = ($destinationPhoneNumberList InstanceOf ReplacementOutgoingDNorSIPURIList)
             ? $destinationPhoneNumberList
             : new ReplacementOutgoingDNorSIPURIList($destinationPhoneNumberList);
        $this->destinationPhoneNumberList->setElementName('destinationPhoneNumberList');
        return $this;
    }

    /**
     * 
     * @return ReplacementOutgoingDNorSIPURIList $destinationPhoneNumberList
     */
    public function getDestinationPhoneNumberList()
    {
        return $this->destinationPhoneNumberList;
    }

    /**
     * 
     */
    public function setIsAnswerTimeoutEnabled($isAnswerTimeoutEnabled = null)
    {
        $this->isAnswerTimeoutEnabled = new PrimitiveType($isAnswerTimeoutEnabled);
        $this->isAnswerTimeoutEnabled->setElementName('isAnswerTimeoutEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $isAnswerTimeoutEnabled
     */
    public function getIsAnswerTimeoutEnabled()
    {
        return ($this->isAnswerTimeoutEnabled)
            ? $this->isAnswerTimeoutEnabled->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAnswerTimeoutMinutes($answerTimeoutMinutes = null)
    {
        $this->answerTimeoutMinutes = ($answerTimeoutMinutes InstanceOf InstantGroupCallAnswerTimeoutMinutes)
             ? $answerTimeoutMinutes
             : new InstantGroupCallAnswerTimeoutMinutes($answerTimeoutMinutes);
        $this->answerTimeoutMinutes->setElementName('answerTimeoutMinutes');
        return $this;
    }

    /**
     * 
     * @return InstantGroupCallAnswerTimeoutMinutes $answerTimeoutMinutes
     */
    public function getAnswerTimeoutMinutes()
    {
        return ($this->answerTimeoutMinutes)
            ? $this->answerTimeoutMinutes->getElementValue()
            : null;
    }
}
