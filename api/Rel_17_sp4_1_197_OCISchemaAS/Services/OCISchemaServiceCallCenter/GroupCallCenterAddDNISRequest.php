<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISPriority;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a Call Center DNIS
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterAddDNISRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             DNISKey $dnisKey,
             $dnisPhoneNumber=null,
             $extension=null,
             $useCustomCLIDSettings,
             $callingLineIdPhoneNumber=null,
             $callingLineIdLastName=null,
             $callingLineIdFirstName=null,
             $useCustomDnisAnnouncementSettings,
             $priority,
             $allowOutgoingACDCall
    ) {
        $this->dnisKey                           = $dnisKey;
        $this->dnisPhoneNumber                   = new DN($dnisPhoneNumber);
        $this->extension                         = new Extension17($extension);
        $this->useCustomCLIDSettings             = $useCustomCLIDSettings;
        $this->callingLineIdPhoneNumber          = new DN($callingLineIdPhoneNumber);
        $this->callingLineIdLastName             = new CallingLineIdLastName($callingLineIdLastName);
        $this->callingLineIdFirstName            = new CallingLineIdFirstName($callingLineIdFirstName);
        $this->useCustomDnisAnnouncementSettings = $useCustomDnisAnnouncementSettings;
        $this->priority                          = $priority;
        $this->allowOutgoingACDCall              = $allowOutgoingACDCall;
        $this->args                              = func_get_args();
    }

    public function setDnisKey($dnisKey)
    {
        $dnisKey and $this->dnisKey = new DNISKey($dnisKey);
    }

    public function getDnisKey()
    {
        return (!$this->dnisKey) ?: $this->dnisKey->value();
    }

    public function setDnisPhoneNumber($dnisPhoneNumber)
    {
        $dnisPhoneNumber and $this->dnisPhoneNumber = new DN($dnisPhoneNumber);
    }

    public function getDnisPhoneNumber()
    {
        return (!$this->dnisPhoneNumber) ?: $this->dnisPhoneNumber->value();
    }

    public function setExtension($extension)
    {
        $extension and $this->extension = new Extension17($extension);
    }

    public function getExtension()
    {
        return (!$this->extension) ?: $this->extension->value();
    }

    public function setUseCustomCLIDSettings($useCustomCLIDSettings)
    {
        $useCustomCLIDSettings and $this->useCustomCLIDSettings = new xs:boolean($useCustomCLIDSettings);
    }

    public function getUseCustomCLIDSettings()
    {
        return (!$this->useCustomCLIDSettings) ?: $this->useCustomCLIDSettings->value();
    }

    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber)
    {
        $callingLineIdPhoneNumber and $this->callingLineIdPhoneNumber = new DN($callingLineIdPhoneNumber);
    }

    public function getCallingLineIdPhoneNumber()
    {
        return (!$this->callingLineIdPhoneNumber) ?: $this->callingLineIdPhoneNumber->value();
    }

    public function setCallingLineIdLastName($callingLineIdLastName)
    {
        $callingLineIdLastName and $this->callingLineIdLastName = new CallingLineIdLastName($callingLineIdLastName);
    }

    public function getCallingLineIdLastName()
    {
        return (!$this->callingLineIdLastName) ?: $this->callingLineIdLastName->value();
    }

    public function setCallingLineIdFirstName($callingLineIdFirstName)
    {
        $callingLineIdFirstName and $this->callingLineIdFirstName = new CallingLineIdFirstName($callingLineIdFirstName);
    }

    public function getCallingLineIdFirstName()
    {
        return (!$this->callingLineIdFirstName) ?: $this->callingLineIdFirstName->value();
    }

    public function setUseCustomDnisAnnouncementSettings($useCustomDnisAnnouncementSettings)
    {
        $useCustomDnisAnnouncementSettings and $this->useCustomDnisAnnouncementSettings = new xs:boolean($useCustomDnisAnnouncementSettings);
    }

    public function getUseCustomDnisAnnouncementSettings()
    {
        return (!$this->useCustomDnisAnnouncementSettings) ?: $this->useCustomDnisAnnouncementSettings->value();
    }

    public function setPriority($priority)
    {
        $priority and $this->priority = new DNISPriority($priority);
    }

    public function getPriority()
    {
        return (!$this->priority) ?: $this->priority->value();
    }

    public function setAllowOutgoingACDCall($allowOutgoingACDCall)
    {
        $allowOutgoingACDCall and $this->allowOutgoingACDCall = new xs:boolean($allowOutgoingACDCall);
    }

    public function getAllowOutgoingACDCall()
    {
        return (!$this->allowOutgoingACDCall) ?: $this->allowOutgoingACDCall->value();
    }
}
