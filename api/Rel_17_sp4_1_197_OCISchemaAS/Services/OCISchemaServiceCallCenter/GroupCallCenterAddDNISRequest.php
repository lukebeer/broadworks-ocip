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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a Call Center DNIS
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterAddDNISRequest extends ComplexType implements ComplexInterface
{
    public    $name                               = __CLASS__;
    protected $dnisKey                            = null;
    protected $dnisPhoneNumber                    = null;
    protected $extension                          = null;
    protected $useCustomCLIDSettings              = null;
    protected $callingLineIdPhoneNumber           = null;
    protected $callingLineIdLastName              = null;
    protected $callingLineIdFirstName             = null;
    protected $useCustomDnisAnnouncementSettings  = null;
    protected $priority                           = null;
    protected $allowOutgoingACDCall               = null;

    public function __construct(
         DNISKey $dnisKey,
         $dnisPhoneNumber = null,
         $extension = null,
         $useCustomCLIDSettings,
         $callingLineIdPhoneNumber = null,
         $callingLineIdLastName = null,
         $callingLineIdFirstName = null,
         $useCustomDnisAnnouncementSettings,
         $priority,
         $allowOutgoingACDCall
    ) {
        $this->setDnisKey($dnisKey);
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

    public function setDnisKey(DNISKey $dnisKey = null)
    {
    }

    public function getDnisKey()
    {
        return (!$this->dnisKey) ?: $this->dnisKey->value();
    }

    public function setDnisPhoneNumber($dnisPhoneNumber = null)
    {
        $this->dnisPhoneNumber = ($dnisPhoneNumber InstanceOf DN)
             ? $dnisPhoneNumber
             : new DN($dnisPhoneNumber);
    }

    public function getDnisPhoneNumber()
    {
        return (!$this->dnisPhoneNumber) ?: $this->dnisPhoneNumber->value();
    }

    public function setExtension($extension = null)
    {
        $this->extension = ($extension InstanceOf Extension17)
             ? $extension
             : new Extension17($extension);
    }

    public function getExtension()
    {
        return (!$this->extension) ?: $this->extension->value();
    }

    public function setUseCustomCLIDSettings(xs:boolean $useCustomCLIDSettings = null)
    {
    }

    public function getUseCustomCLIDSettings()
    {
        return (!$this->useCustomCLIDSettings) ?: $this->useCustomCLIDSettings->value();
    }

    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber = null)
    {
        $this->callingLineIdPhoneNumber = ($callingLineIdPhoneNumber InstanceOf DN)
             ? $callingLineIdPhoneNumber
             : new DN($callingLineIdPhoneNumber);
    }

    public function getCallingLineIdPhoneNumber()
    {
        return (!$this->callingLineIdPhoneNumber) ?: $this->callingLineIdPhoneNumber->value();
    }

    public function setCallingLineIdLastName($callingLineIdLastName = null)
    {
        $this->callingLineIdLastName = ($callingLineIdLastName InstanceOf CallingLineIdLastName)
             ? $callingLineIdLastName
             : new CallingLineIdLastName($callingLineIdLastName);
    }

    public function getCallingLineIdLastName()
    {
        return (!$this->callingLineIdLastName) ?: $this->callingLineIdLastName->value();
    }

    public function setCallingLineIdFirstName($callingLineIdFirstName = null)
    {
        $this->callingLineIdFirstName = ($callingLineIdFirstName InstanceOf CallingLineIdFirstName)
             ? $callingLineIdFirstName
             : new CallingLineIdFirstName($callingLineIdFirstName);
    }

    public function getCallingLineIdFirstName()
    {
        return (!$this->callingLineIdFirstName) ?: $this->callingLineIdFirstName->value();
    }

    public function setUseCustomDnisAnnouncementSettings(xs:boolean $useCustomDnisAnnouncementSettings = null)
    {
    }

    public function getUseCustomDnisAnnouncementSettings()
    {
        return (!$this->useCustomDnisAnnouncementSettings) ?: $this->useCustomDnisAnnouncementSettings->value();
    }

    public function setPriority($priority = null)
    {
        $this->priority = ($priority InstanceOf DNISPriority)
             ? $priority
             : new DNISPriority($priority);
    }

    public function getPriority()
    {
        return (!$this->priority) ?: $this->priority->value();
    }

    public function setAllowOutgoingACDCall(xs:boolean $allowOutgoingACDCall = null)
    {
    }

    public function getAllowOutgoingACDCall()
    {
        return (!$this->allowOutgoingACDCall) ?: $this->allowOutgoingACDCall->value();
    }
}
