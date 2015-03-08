<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignalingAddressType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemMGCPDeviceTypeGetRequest.
 */
class SystemMGCPDeviceTypeGetResponse extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $isObsolete     = null;
    protected $profile        = null;
    protected $numberOfPorts  = null;
    protected $protocolChoice = null;


    /**
     * 
     */
    public function setIsObsolete($isObsolete = null)
    {
        $this->isObsolete = (boolean) $isObsolete;
    }

    /**
     * 
     */
    public function getIsObsolete()
    {
        return (!$this->isObsolete) ?: $this->isObsolete->getValue();
    }

    /**
     * Device type signaling address types.
     */
    public function setProfile($profile = null)
    {
        $this->profile = ($profile InstanceOf SignalingAddressType)
             ? $profile
             : new SignalingAddressType($profile);
    }

    /**
     * Device type signaling address types.
     */
    public function getProfile()
    {
        return (!$this->profile) ?: $this->profile->getValue();
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a positive int quantity.
     */
    public function setNumberOfPorts(UnboundedPositiveInt $numberOfPorts = null)
    {
        $this->numberOfPorts =  $numberOfPorts;
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a positive int quantity.
     */
    public function getNumberOfPorts()
    {
        return (!$this->numberOfPorts) ?: $this->numberOfPorts->getValue();
    }

    /**
     * Access device protocol.
     */
    public function setProtocolChoice($protocolChoice = null)
    {
        $this->protocolChoice = ($protocolChoice InstanceOf AccessDeviceProtocol)
             ? $protocolChoice
             : new AccessDeviceProtocol($protocolChoice);
    }

    /**
     * Access device protocol.
     */
    public function getProtocolChoice()
    {
        return (!$this->protocolChoice) ?: $this->protocolChoice->getValue();
    }
}
