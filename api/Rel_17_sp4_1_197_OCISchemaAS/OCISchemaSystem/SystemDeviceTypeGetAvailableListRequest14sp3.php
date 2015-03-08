<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Requests a list of non-obsolete Identity/device profile types defined in the system. It is possible
 *         to get either all conference device types or all non-conferernce types. This command is similar
 *         to the SystemSIPDeviceTypeGetListRequest and SystemMGCPDeviceTypeGetListRequest
 *         but gets both SIP and MGCP types.
 *         The response is either SystemDeviceTypeGetlAvailableListResponse14sp1 or ErrorResponse.
 */
class SystemDeviceTypeGetAvailableListRequest14sp3 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDeviceTypeGetAvailableListResponse14sp3';
    public    $name                  = __CLASS__;
    protected $allowConference       = null;
    protected $allowMusicOnHold      = null;
    protected $onlyConference        = null;
    protected $onlyVideoCapable      = null;
    protected $onlyOptionalIpAddress = null;

    public function __construct(
         $allowConference,
         $allowMusicOnHold,
         $onlyConference,
         $onlyVideoCapable,
         $onlyOptionalIpAddress
    ) {
        $this->setAllowConference($allowConference);
        $this->setAllowMusicOnHold($allowMusicOnHold);
        $this->setOnlyConference($onlyConference);
        $this->setOnlyVideoCapable($onlyVideoCapable);
        $this->setOnlyOptionalIpAddress($onlyOptionalIpAddress);
    }

    /**
     * 
     */
    public function setAllowConference($allowConference = null)
    {
        $this->allowConference = (boolean) $allowConference;
    }

    /**
     * 
     */
    public function getAllowConference()
    {
        return (!$this->allowConference) ?: $this->allowConference->getValue();
    }

    /**
     * 
     */
    public function setAllowMusicOnHold($allowMusicOnHold = null)
    {
        $this->allowMusicOnHold = (boolean) $allowMusicOnHold;
    }

    /**
     * 
     */
    public function getAllowMusicOnHold()
    {
        return (!$this->allowMusicOnHold) ?: $this->allowMusicOnHold->getValue();
    }

    /**
     * 
     */
    public function setOnlyConference($onlyConference = null)
    {
        $this->onlyConference = (boolean) $onlyConference;
    }

    /**
     * 
     */
    public function getOnlyConference()
    {
        return (!$this->onlyConference) ?: $this->onlyConference->getValue();
    }

    /**
     * 
     */
    public function setOnlyVideoCapable($onlyVideoCapable = null)
    {
        $this->onlyVideoCapable = (boolean) $onlyVideoCapable;
    }

    /**
     * 
     */
    public function getOnlyVideoCapable()
    {
        return (!$this->onlyVideoCapable) ?: $this->onlyVideoCapable->getValue();
    }

    /**
     * 
     */
    public function setOnlyOptionalIpAddress($onlyOptionalIpAddress = null)
    {
        $this->onlyOptionalIpAddress = (boolean) $onlyOptionalIpAddress;
    }

    /**
     * 
     */
    public function getOnlyOptionalIpAddress()
    {
        return (!$this->onlyOptionalIpAddress) ?: $this->onlyOptionalIpAddress->getValue();
    }
}