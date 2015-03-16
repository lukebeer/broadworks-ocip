<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupRoutePointGetDNISRequest.
 */
class GroupRoutePointGetDNISResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupRoutePointGetDNISResponse';
    protected $dnisPhoneNumber;
    protected $extension;
    protected $useCustomCLIDSettings;
    protected $callingLineIdPhoneNumber;
    protected $callingLineIdLastName;
    protected $callingLineIdFirstName;
    protected $useCustomDnisAnnouncementSettings;
    protected $allowOutgoingACDCall;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\GroupRoutePointGetDNISResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDnisPhoneNumber($dnisPhoneNumber = null)
    {
        $this->dnisPhoneNumber = ($dnisPhoneNumber InstanceOf DN)
             ? $dnisPhoneNumber
             : new DN($dnisPhoneNumber);
        $this->dnisPhoneNumber->setName('dnisPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $dnisPhoneNumber
     */
    public function getDnisPhoneNumber()
    {
        return ($this->dnisPhoneNumber) ? $this->dnisPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setExtension($extension = null)
    {
        $this->extension = ($extension InstanceOf Extension17)
             ? $extension
             : new Extension17($extension);
        $this->extension->setName('extension');
        return $this;
    }

    /**
     * 
     * @return Extension17 $extension
     */
    public function getExtension()
    {
        return ($this->extension) ? $this->extension->getValue() : null;
    }

    /**
     * 
     */
    public function setUseCustomCLIDSettings($useCustomCLIDSettings = null)
    {
        $this->useCustomCLIDSettings = new PrimitiveType($useCustomCLIDSettings);
        $this->useCustomCLIDSettings->setName('useCustomCLIDSettings');
        return $this;
    }

    /**
     * 
     * @return boolean $useCustomCLIDSettings
     */
    public function getUseCustomCLIDSettings()
    {
        return ($this->useCustomCLIDSettings) ? $this->useCustomCLIDSettings->getValue() : null;
    }

    /**
     * 
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber = null)
    {
        $this->callingLineIdPhoneNumber = ($callingLineIdPhoneNumber InstanceOf DN)
             ? $callingLineIdPhoneNumber
             : new DN($callingLineIdPhoneNumber);
        $this->callingLineIdPhoneNumber->setName('callingLineIdPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $callingLineIdPhoneNumber
     */
    public function getCallingLineIdPhoneNumber()
    {
        return ($this->callingLineIdPhoneNumber) ? $this->callingLineIdPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setCallingLineIdLastName($callingLineIdLastName = null)
    {
        $this->callingLineIdLastName = ($callingLineIdLastName InstanceOf CallingLineIdLastName)
             ? $callingLineIdLastName
             : new CallingLineIdLastName($callingLineIdLastName);
        $this->callingLineIdLastName->setName('callingLineIdLastName');
        return $this;
    }

    /**
     * 
     * @return CallingLineIdLastName $callingLineIdLastName
     */
    public function getCallingLineIdLastName()
    {
        return ($this->callingLineIdLastName) ? $this->callingLineIdLastName->getValue() : null;
    }

    /**
     * 
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName = null)
    {
        $this->callingLineIdFirstName = ($callingLineIdFirstName InstanceOf CallingLineIdFirstName)
             ? $callingLineIdFirstName
             : new CallingLineIdFirstName($callingLineIdFirstName);
        $this->callingLineIdFirstName->setName('callingLineIdFirstName');
        return $this;
    }

    /**
     * 
     * @return CallingLineIdFirstName $callingLineIdFirstName
     */
    public function getCallingLineIdFirstName()
    {
        return ($this->callingLineIdFirstName) ? $this->callingLineIdFirstName->getValue() : null;
    }

    /**
     * 
     */
    public function setUseCustomDnisAnnouncementSettings($useCustomDnisAnnouncementSettings = null)
    {
        $this->useCustomDnisAnnouncementSettings = new PrimitiveType($useCustomDnisAnnouncementSettings);
        $this->useCustomDnisAnnouncementSettings->setName('useCustomDnisAnnouncementSettings');
        return $this;
    }

    /**
     * 
     * @return boolean $useCustomDnisAnnouncementSettings
     */
    public function getUseCustomDnisAnnouncementSettings()
    {
        return ($this->useCustomDnisAnnouncementSettings) ? $this->useCustomDnisAnnouncementSettings->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowOutgoingACDCall($allowOutgoingACDCall = null)
    {
        $this->allowOutgoingACDCall = new PrimitiveType($allowOutgoingACDCall);
        $this->allowOutgoingACDCall->setName('allowOutgoingACDCall');
        return $this;
    }

    /**
     * 
     * @return boolean $allowOutgoingACDCall
     */
    public function getAllowOutgoingACDCall()
    {
        return ($this->allowOutgoingACDCall) ? $this->allowOutgoingACDCall->getValue() : null;
    }
}
