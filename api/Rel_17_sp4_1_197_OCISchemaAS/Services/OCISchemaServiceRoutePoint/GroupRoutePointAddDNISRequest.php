<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a Route Point DNIS.        
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointAddDNISRequest extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $dnisKey                           = null;
    protected $dnisPhoneNumber                   = null;
    protected $extension                         = null;
    protected $useCustomCLIDSettings             = null;
    protected $callingLineIdPhoneNumber          = null;
    protected $callingLineIdLastName             = null;
    protected $callingLineIdFirstName            = null;
    protected $useCustomDnisAnnouncementSettings = null;
    protected $allowOutgoingACDCall              = null;

    public function __construct(
          $dnisKey,
         $dnisPhoneNumber = null,
         $extension = null,
         $useCustomCLIDSettings,
         $callingLineIdPhoneNumber = null,
         $callingLineIdLastName = null,
         $callingLineIdFirstName = null,
         $useCustomDnisAnnouncementSettings,
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
        $this->setAllowOutgoingACDCall($allowOutgoingACDCall);
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
        return (!$this->useCustomCLIDSettings) ?: $this->useCustomCLIDSettings->getValue();
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
        return (!$this->useCustomDnisAnnouncementSettings) ?: $this->useCustomDnisAnnouncementSettings->getValue();
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
        return (!$this->allowOutgoingACDCall) ?: $this->allowOutgoingACDCall->getValue();
    }
}
