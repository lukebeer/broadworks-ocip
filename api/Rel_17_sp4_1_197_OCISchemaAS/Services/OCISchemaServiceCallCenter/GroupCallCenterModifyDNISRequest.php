<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\DNISPriority;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a call center's DNIS settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyDNISRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterModifyDNISRequest';
    protected $dnisKey;
    protected $newDNISName;
    protected $dnisPhoneNumber;
    protected $extension;
    protected $useCustomCLIDSettings;
    protected $callingLineIdPhoneNumber;
    protected $callingLineIdLastName;
    protected $callingLineIdFirstName;
    protected $useCustomDnisAnnouncementSettings;
    protected $priority;
    protected $allowOutgoingACDCall;

    public function __construct(
         $dnisKey = '',
         $newDNISName = null,
         $dnisPhoneNumber = null,
         $extension = null,
         $useCustomCLIDSettings = null,
         $callingLineIdPhoneNumber = null,
         $callingLineIdLastName = null,
         $callingLineIdFirstName = null,
         $useCustomDnisAnnouncementSettings = null,
         $priority = null,
         $allowOutgoingACDCall = null
    ) {
        $this->setDnisKey($dnisKey);
        $this->setNewDNISName($newDNISName);
        $this->setDnisPhoneNumber($dnisPhoneNumber);
        $this->setExtension($extension);
        $this->setUseCustomCLIDSettings($useCustomCLIDSettings);
        $this->setCallingLineIdPhoneNumber($callingLineIdPhoneNumber);
        $this->setCallingLineIdLastName($callingLineIdLastName);
        $this->setCallingLineIdFirstName($callingLineIdFirstName);
        $this->setUseCustomDnisAnnouncementSettings($useCustomDnisAnnouncementSettings);
        $this->setPriority($priority);
        $this->setAllowOutgoingACDCall($allowOutgoingACDCall);
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
    public function setDnisKey(DNISKey $dnisKey = null)
    {
        $this->dnisKey = ($dnisKey InstanceOf DNISKey)
             ? $dnisKey
             : new DNISKey($dnisKey);
        $this->dnisKey->setElementName('dnisKey');
        return $this;
    }

    /**
     * 
     * @return DNISKey $dnisKey
     */
    public function getDnisKey()
    {
        return $this->dnisKey;
    }

    /**
     * 
     */
    public function setNewDNISName($newDNISName = null)
    {
        $this->newDNISName = ($newDNISName InstanceOf DNISName)
             ? $newDNISName
             : new DNISName($newDNISName);
        $this->newDNISName->setElementName('newDNISName');
        return $this;
    }

    /**
     * 
     * @return DNISName $newDNISName
     */
    public function getNewDNISName()
    {
        return ($this->newDNISName)
            ? $this->newDNISName->getElementValue()
            : null;
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
    public function setPriority($priority = null)
    {
        $this->priority = ($priority InstanceOf DNISPriority)
             ? $priority
             : new DNISPriority($priority);
        $this->priority->setElementName('priority');
        return $this;
    }

    /**
     * 
     * @return DNISPriority $priority
     */
    public function getPriority()
    {
        return ($this->priority)
            ? $this->priority->getElementValue()
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
