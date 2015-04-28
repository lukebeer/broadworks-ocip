<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantGroupCall; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantGroupCall\InstantGroupCallAnswerTimeoutMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceReadProfile17;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupInstantGroupCallGetInstanceRequest17.
 *         Contains the service profile information and a list of phone numbers.
 */
class GroupInstantGroupCallGetInstanceResponse17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupInstantGroupCallGetInstanceResponse17';
    protected $serviceInstanceProfile;
    protected $destinationPhoneNumber;
    protected $isAnswerTimeoutEnabled;
    protected $answerTimeoutMinutes;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantGroupCall\GroupInstantGroupCallGetInstanceResponse17 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile17 $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceReadProfile17)
             ? $serviceInstanceProfile
             : new ServiceInstanceReadProfile17($serviceInstanceProfile);
        $this->serviceInstanceProfile->setElementName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceReadProfile17 $serviceInstanceProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setDestinationPhoneNumber($destinationPhoneNumber = null)
    {
        $this->destinationPhoneNumber = ($destinationPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $destinationPhoneNumber
             : new OutgoingDNorSIPURI($destinationPhoneNumber);
        $this->destinationPhoneNumber->setElementName('destinationPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $destinationPhoneNumber
     */
    public function getDestinationPhoneNumber()
    {
        return ($this->destinationPhoneNumber)
            ? $this->destinationPhoneNumber->getElementValue()
            : null;
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
