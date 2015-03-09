<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\DNISPriority;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\GroupCallCenterModifyDNISResponse;
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
    public    $name                              = __CLASS__;
    protected $dnisKey                           = null;
    protected $newDNISName                       = null;
    protected $dnisPhoneNumber                   = null;
    protected $extension                         = null;
    protected $useCustomCLIDSettings             = null;
    protected $callingLineIdPhoneNumber          = null;
    protected $callingLineIdLastName             = null;
    protected $callingLineIdFirstName            = null;
    protected $useCustomDnisAnnouncementSettings = null;
    protected $priority                          = null;
    protected $allowOutgoingACDCall              = null;

    public function __construct(
          $dnisKey,
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
     * @return GroupCallCenterModifyDNISResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Uniquely identifies a Call Center DNIS.
     */
    public function setDnisKey(DNISKey $dnisKey = null)
    {
        $this->dnisKey =  $dnisKey;
    }

    /**
     * Uniquely identifies a Call Center DNIS.
     */
    public function getDnisKey()
    {
        return (!$this->dnisKey) ?: $this->dnisKey->getValue();
    }

    /**
     * Call Center DNIS Name.
     */
    public function setNewDNISName($newDNISName = null)
    {
        $this->newDNISName = ($newDNISName InstanceOf DNISName)
             ? $newDNISName
             : new DNISName($newDNISName);
    }

    /**
     * Call Center DNIS Name.
     */
    public function getNewDNISName()
    {
        return (!$this->newDNISName) ?: $this->newDNISName->getValue();
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setDnisPhoneNumber($dnisPhoneNumber = null)
    {
        $this->dnisPhoneNumber = ($dnisPhoneNumber InstanceOf DN)
             ? $dnisPhoneNumber
             : new DN($dnisPhoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getDnisPhoneNumber()
    {
        return (!$this->dnisPhoneNumber) ?: $this->dnisPhoneNumber->getValue();
    }

    /**
     * Extension.
     */
    public function setExtension($extension = null)
    {
        $this->extension = ($extension InstanceOf Extension17)
             ? $extension
             : new Extension17($extension);
    }

    /**
     * Extension.
     */
    public function getExtension()
    {
        return (!$this->extension) ?: $this->extension->getValue();
    }

    /**
     * 
     */
    public function setUseCustomCLIDSettings($useCustomCLIDSettings = null)
    {
        $this->useCustomCLIDSettings = (boolean) $useCustomCLIDSettings;
    }

    /**
     * 
     */
    public function getUseCustomCLIDSettings()
    {
        return (!$this->useCustomCLIDSettings) ?: $this->useCustomCLIDSettings;
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber = null)
    {
        $this->callingLineIdPhoneNumber = ($callingLineIdPhoneNumber InstanceOf DN)
             ? $callingLineIdPhoneNumber
             : new DN($callingLineIdPhoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getCallingLineIdPhoneNumber()
    {
        return (!$this->callingLineIdPhoneNumber) ?: $this->callingLineIdPhoneNumber->getValue();
    }

    /**
     * Last Name for Calling Line Id Display.
     */
    public function setCallingLineIdLastName($callingLineIdLastName = null)
    {
        $this->callingLineIdLastName = ($callingLineIdLastName InstanceOf CallingLineIdLastName)
             ? $callingLineIdLastName
             : new CallingLineIdLastName($callingLineIdLastName);
    }

    /**
     * Last Name for Calling Line Id Display.
     */
    public function getCallingLineIdLastName()
    {
        return (!$this->callingLineIdLastName) ?: $this->callingLineIdLastName->getValue();
    }

    /**
     * First Name for Calling Line Id Display.
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName = null)
    {
        $this->callingLineIdFirstName = ($callingLineIdFirstName InstanceOf CallingLineIdFirstName)
             ? $callingLineIdFirstName
             : new CallingLineIdFirstName($callingLineIdFirstName);
    }

    /**
     * First Name for Calling Line Id Display.
     */
    public function getCallingLineIdFirstName()
    {
        return (!$this->callingLineIdFirstName) ?: $this->callingLineIdFirstName->getValue();
    }

    /**
     * 
     */
    public function setUseCustomDnisAnnouncementSettings($useCustomDnisAnnouncementSettings = null)
    {
        $this->useCustomDnisAnnouncementSettings = (boolean) $useCustomDnisAnnouncementSettings;
    }

    /**
     * 
     */
    public function getUseCustomDnisAnnouncementSettings()
    {
        return (!$this->useCustomDnisAnnouncementSettings) ?: $this->useCustomDnisAnnouncementSettings;
    }

    /**
     * Choices for DNIS priority.
     */
    public function setPriority($priority = null)
    {
        $this->priority = ($priority InstanceOf DNISPriority)
             ? $priority
             : new DNISPriority($priority);
    }

    /**
     * Choices for DNIS priority.
     */
    public function getPriority()
    {
        return (!$this->priority) ?: $this->priority->getValue();
    }

    /**
     * 
     */
    public function setAllowOutgoingACDCall($allowOutgoingACDCall = null)
    {
        $this->allowOutgoingACDCall = (boolean) $allowOutgoingACDCall;
    }

    /**
     * 
     */
    public function getAllowOutgoingACDCall()
    {
        return (!$this->allowOutgoingACDCall) ?: $this->allowOutgoingACDCall;
    }
}
