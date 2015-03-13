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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a Route Point DNIS.        
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointAddDNISRequest extends ComplexType implements ComplexInterface
{
    public    $name                              = 'GroupRoutePointAddDNISRequest';
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
         DNISKey $dnisKey,
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
        if (!$dnisKey) return $this;
        $this->dnisKey = $dnisKey;
        $this->dnisKey->setName('dnisKey');
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
     * @return DN $dnisPhoneNumber
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
     * @return Extension17 $extension
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
     * @return boolean $useCustomCLIDSettings
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
     * @return DN $callingLineIdPhoneNumber
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
     * @return CallingLineIdLastName $callingLineIdLastName
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
     * @return CallingLineIdFirstName $callingLineIdFirstName
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
     * @return boolean $useCustomDnisAnnouncementSettings
     */
    public function getUseCustomDnisAnnouncementSettings()
    {
        return $this->useCustomDnisAnnouncementSettings->getValue();
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
     * @return boolean $allowOutgoingACDCall
     */
    public function getAllowOutgoingACDCall()
    {
        return $this->allowOutgoingACDCall->getValue();
    }
}
