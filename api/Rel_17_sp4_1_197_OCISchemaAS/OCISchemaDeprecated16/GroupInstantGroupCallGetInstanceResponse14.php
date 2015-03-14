<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantGroupCall\InstantGroupCallAnswerTimeoutMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupInstantGroupCallGetInstanceRequest14.
 *         Contains the service profile information and a list of phone numbers.
 */
class GroupInstantGroupCallGetInstanceResponse14 extends ComplexType implements ComplexInterface
{
    public    $name                   = 'GroupInstantGroupCallGetInstanceResponse14';
    protected $serviceInstanceProfile = null;
    protected $destinationPhoneNumber = null;
    protected $isAnswerTimeoutEnabled = null;
    protected $answerTimeoutMinutes   = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupInstantGroupCallGetInstanceResponse14 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
        if (!$serviceInstanceProfile) return $this;
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceReadProfile $serviceInstanceProfile
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
        if (!$destinationPhoneNumber) return $this;
        $this->destinationPhoneNumber = ($destinationPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $destinationPhoneNumber
             : new OutgoingDNorSIPURI($destinationPhoneNumber);
        $this->destinationPhoneNumber->setName('destinationPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $destinationPhoneNumber
     */
    public function getDestinationPhoneNumber()
    {
        return $this->destinationPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setIsAnswerTimeoutEnabled($isAnswerTimeoutEnabled = null)
    {
        if (!$isAnswerTimeoutEnabled) return $this;
        $this->isAnswerTimeoutEnabled = new PrimitiveType($isAnswerTimeoutEnabled);
        $this->isAnswerTimeoutEnabled->setName('isAnswerTimeoutEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $isAnswerTimeoutEnabled
     */
    public function getIsAnswerTimeoutEnabled()
    {
        return $this->isAnswerTimeoutEnabled->getValue();
    }

    /**
     * 
     */
    public function setAnswerTimeoutMinutes($answerTimeoutMinutes = null)
    {
        if (!$answerTimeoutMinutes) return $this;
        $this->answerTimeoutMinutes = ($answerTimeoutMinutes InstanceOf InstantGroupCallAnswerTimeoutMinutes)
             ? $answerTimeoutMinutes
             : new InstantGroupCallAnswerTimeoutMinutes($answerTimeoutMinutes);
        $this->answerTimeoutMinutes->setName('answerTimeoutMinutes');
        return $this;
    }

    /**
     * 
     * @return InstantGroupCallAnswerTimeoutMinutes $answerTimeoutMinutes
     */
    public function getAnswerTimeoutMinutes()
    {
        return $this->answerTimeoutMinutes->getValue();
    }
}
