<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntercept; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept\InterceptPhoneNumberDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify a Intercept User number's description in the system.
 *           The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInterceptUserModifyDnRequest extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $phoneNumber = null;
    protected $description = null;

    public function __construct(
         $phoneNumber,
         $description = null
    ) {
        $this->setPhoneNumber($phoneNumber);
        $this->setDescription($description);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->getValue();
    }

    /**
     * Intercept User phone number’s Description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf InterceptPhoneNumberDescription)
             ? $description
             : new InterceptPhoneNumberDescription($description);
    }

    /**
     * Intercept User phone number’s Description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }
}
