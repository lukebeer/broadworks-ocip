<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRemoteOffice; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserRemoteOfficeGetRequest.
 */
class UserRemoteOfficeGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $remoteOfficePhoneNumber=null
    ) {
        $this->isActive                = $isActive;
        $this->remoteOfficePhoneNumber = new OutgoingDNorSIPURI($remoteOfficePhoneNumber);
        $this->args                    = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setRemoteOfficePhoneNumber($remoteOfficePhoneNumber)
    {
        $remoteOfficePhoneNumber and $this->remoteOfficePhoneNumber = new OutgoingDNorSIPURI($remoteOfficePhoneNumber);
    }

    public function getRemoteOfficePhoneNumber()
    {
        return (!$this->remoteOfficePhoneNumber) ?: $this->remoteOfficePhoneNumber->value();
    }
}
