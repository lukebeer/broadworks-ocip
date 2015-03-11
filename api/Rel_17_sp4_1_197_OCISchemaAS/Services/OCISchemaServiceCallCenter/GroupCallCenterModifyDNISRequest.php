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
    public    $name                              = 'GroupCallCenterModifyDNISRequest';
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
         DNISKey $dnisKey,
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
     * @return 
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
        if (!$dnisKey) return $this;
        $this->dnisKey = $dnisKey;
        $this->dnisKey->setName('dnisKey');
        return $this;
    }

    /**
     * 
     * @return DNISKey
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
        if (!$newDNISName) return $this;
        $this->newDNISName = ($newDNISName InstanceOf DNISName)
             ? $newDNISName
             : new DNISName($newDNISName);
        $this->newDNISName->setName('newDNISName');
        return $this;
    }

    /**
     * 
     * @return DNISName
     */
    public function getNewDNISName()
    {
        return $this->newDNISName->getValue();
    }

    /**
     * 
     */
    public function setDnisPhoneNumber($dnisPhoneNumber = null)
    {
        if (!$dnisPhoneNumber) return $this;
        $this->dnisPhoneNumber = ($dnisPhoneNumber InstanceOf DN)
             ? $dnisPhoneNumber
             : new DN($dnisPhoneNumber);
        $this->dnisPhoneNumber->setName('dnisPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN
     */
    public function getDnisPhoneNumber()
    {
        return $this->dnisPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setExtension($extension = null)
    {
        if (!$extension) return $this;
        $this->extension = ($extension InstanceOf Extension17)
             ? $extension
             : new Extension17($extension);
        $this->extension->setName('extension');
        return $this;
    }

    /**
     * 
     * @return Extension17
     */
    public function getExtension()
    {
        return $this->extension->getValue();
    }

    /**
     * 
     */
    public function setUseCustomCLIDSettings($useCustomCLIDSettings = null)
    {
        if (!$useCustomCLIDSettings) return $this;
        $this->useCustomCLIDSettings = new PrimitiveType($useCustomCLIDSettings);
        $this->useCustomCLIDSettings->setName('useCustomCLIDSettings');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseCustomCLIDSettings()
    {
        return $this->useCustomCLIDSettings->getValue();
    }

    /**
     * 
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber = null)
    {
        if (!$callingLineIdPhoneNumber) return $this;
        $this->callingLineIdPhoneNumber = ($callingLineIdPhoneNumber InstanceOf DN)
             ? $callingLineIdPhoneNumber
             : new DN($callingLineIdPhoneNumber);
        $this->callingLineIdPhoneNumber->setName('callingLineIdPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setCallingLineIdLastName($callingLineIdLastName = null)
    {
        if (!$callingLineIdLastName) return $this;
        $this->callingLineIdLastName = ($callingLineIdLastName InstanceOf CallingLineIdLastName)
             ? $callingLineIdLastName
             : new CallingLineIdLastName($callingLineIdLastName);
        $this->callingLineIdLastName->setName('callingLineIdLastName');
        return $this;
    }

    /**
     * 
     * @return CallingLineIdLastName
     */
    public function getCallingLineIdLastName()
    {
        return $this->callingLineIdLastName->getValue();
    }

    /**
     * 
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName = null)
    {
        if (!$callingLineIdFirstName) return $this;
        $this->callingLineIdFirstName = ($callingLineIdFirstName InstanceOf CallingLineIdFirstName)
             ? $callingLineIdFirstName
             : new CallingLineIdFirstName($callingLineIdFirstName);
        $this->callingLineIdFirstName->setName('callingLineIdFirstName');
        return $this;
    }

    /**
     * 
     * @return CallingLineIdFirstName
     */
    public function getCallingLineIdFirstName()
    {
        return $this->callingLineIdFirstName->getValue();
    }

    /**
     * 
     */
    public function setUseCustomDnisAnnouncementSettings($useCustomDnisAnnouncementSettings = null)
    {
        if (!$useCustomDnisAnnouncementSettings) return $this;
        $this->useCustomDnisAnnouncementSettings = new PrimitiveType($useCustomDnisAnnouncementSettings);
        $this->useCustomDnisAnnouncementSettings->setName('useCustomDnisAnnouncementSettings');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseCustomDnisAnnouncementSettings()
    {
        return $this->useCustomDnisAnnouncementSettings->getValue();
    }

    /**
     * 
     */
    public function setPriority($priority = null)
    {
        if (!$priority) return $this;
        $this->priority = ($priority InstanceOf DNISPriority)
             ? $priority
             : new DNISPriority($priority);
        $this->priority->setName('priority');
        return $this;
    }

    /**
     * 
     * @return DNISPriority
     */
    public function getPriority()
    {
        return $this->priority->getValue();
    }

    /**
     * 
     */
    public function setAllowOutgoingACDCall($allowOutgoingACDCall = null)
    {
        if (!$allowOutgoingACDCall) return $this;
        $this->allowOutgoingACDCall = new PrimitiveType($allowOutgoingACDCall);
        $this->allowOutgoingACDCall->setName('allowOutgoingACDCall');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowOutgoingACDCall()
    {
        return $this->allowOutgoingACDCall->getValue();
    }
}
