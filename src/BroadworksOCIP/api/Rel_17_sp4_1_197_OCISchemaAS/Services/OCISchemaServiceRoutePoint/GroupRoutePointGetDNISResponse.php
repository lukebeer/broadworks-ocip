<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdFirstName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdLastName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupRoutePointGetDNISRequest.
 */
class GroupRoutePointGetDNISResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupRoutePointGetDNISResponse';
    protected $dnisPhoneNumber;
    protected $extension;
    protected $useCustomCLIDSettings;
    protected $callingLineIdPhoneNumber;
    protected $callingLineIdLastName;
    protected $callingLineIdFirstName;
    protected $useCustomDnisAnnouncementSettings;
    protected $allowOutgoingACDCall;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\GroupRoutePointGetDNISResponse $response
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
        $this->dnisPhoneNumber->setElementName('dnisPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $dnisPhoneNumber
     */
    public function getDnisPhoneNumber()
    {
        return ($this->dnisPhoneNumber)
            ? $this->dnisPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExtension($extension = null)
    {
        $this->extension = ($extension InstanceOf Extension17)
             ? $extension
             : new Extension17($extension);
        $this->extension->setElementName('extension');
        return $this;
    }

    /**
     * 
     * @return Extension17 $extension
     */
    public function getExtension()
    {
        return ($this->extension)
            ? $this->extension->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseCustomCLIDSettings($useCustomCLIDSettings = null)
    {
        $this->useCustomCLIDSettings = new PrimitiveType($useCustomCLIDSettings);
        $this->useCustomCLIDSettings->setElementName('useCustomCLIDSettings');
        return $this;
    }

    /**
     * 
     * @return boolean $useCustomCLIDSettings
     */
    public function getUseCustomCLIDSettings()
    {
        return ($this->useCustomCLIDSettings)
            ? $this->useCustomCLIDSettings->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber = null)
    {
        $this->callingLineIdPhoneNumber = ($callingLineIdPhoneNumber InstanceOf DN)
             ? $callingLineIdPhoneNumber
             : new DN($callingLineIdPhoneNumber);
        $this->callingLineIdPhoneNumber->setElementName('callingLineIdPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $callingLineIdPhoneNumber
     */
    public function getCallingLineIdPhoneNumber()
    {
        return ($this->callingLineIdPhoneNumber)
            ? $this->callingLineIdPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingLineIdLastName($callingLineIdLastName = null)
    {
        $this->callingLineIdLastName = ($callingLineIdLastName InstanceOf CallingLineIdLastName)
             ? $callingLineIdLastName
             : new CallingLineIdLastName($callingLineIdLastName);
        $this->callingLineIdLastName->setElementName('callingLineIdLastName');
        return $this;
    }

    /**
     * 
     * @return CallingLineIdLastName $callingLineIdLastName
     */
    public function getCallingLineIdLastName()
    {
        return ($this->callingLineIdLastName)
            ? $this->callingLineIdLastName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName = null)
    {
        $this->callingLineIdFirstName = ($callingLineIdFirstName InstanceOf CallingLineIdFirstName)
             ? $callingLineIdFirstName
             : new CallingLineIdFirstName($callingLineIdFirstName);
        $this->callingLineIdFirstName->setElementName('callingLineIdFirstName');
        return $this;
    }

    /**
     * 
     * @return CallingLineIdFirstName $callingLineIdFirstName
     */
    public function getCallingLineIdFirstName()
    {
        return ($this->callingLineIdFirstName)
            ? $this->callingLineIdFirstName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseCustomDnisAnnouncementSettings($useCustomDnisAnnouncementSettings = null)
    {
        $this->useCustomDnisAnnouncementSettings = new PrimitiveType($useCustomDnisAnnouncementSettings);
        $this->useCustomDnisAnnouncementSettings->setElementName('useCustomDnisAnnouncementSettings');
        return $this;
    }

    /**
     * 
     * @return boolean $useCustomDnisAnnouncementSettings
     */
    public function getUseCustomDnisAnnouncementSettings()
    {
        return ($this->useCustomDnisAnnouncementSettings)
            ? $this->useCustomDnisAnnouncementSettings->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowOutgoingACDCall($allowOutgoingACDCall = null)
    {
        $this->allowOutgoingACDCall = new PrimitiveType($allowOutgoingACDCall);
        $this->allowOutgoingACDCall->setElementName('allowOutgoingACDCall');
        return $this;
    }

    /**
     * 
     * @return boolean $allowOutgoingACDCall
     */
    public function getAllowOutgoingACDCall()
    {
        return ($this->allowOutgoingACDCall)
            ? $this->allowOutgoingACDCall->getElementValue()
            : null;
    }
}
