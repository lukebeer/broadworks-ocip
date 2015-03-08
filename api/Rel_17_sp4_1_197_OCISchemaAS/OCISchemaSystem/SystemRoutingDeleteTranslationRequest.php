<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoutingDigits;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to delete a digit routing table entry from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoutingDeleteTranslationRequest extends ComplexType implements ComplexInterface
{
    public    $name   = __CLASS__;
    protected $digits = null;

    public function __construct(
         $digits
    ) {
        $this->setDigits($digits);
    }

    /**
     * Digit pattern used to route a call -- a 3 to 6 digit number.
     *         If the digit pattern does not include a wildcard, it must be 6 digits.
     */
    public function setDigits($digits = null)
    {
        $this->digits = ($digits InstanceOf RoutingDigits)
             ? $digits
             : new RoutingDigits($digits);
    }

    /**
     * Digit pattern used to route a call -- a 3 to 6 digit number.
     *         If the digit pattern does not include a wildcard, it must be 6 digits.
     */
    public function getDigits()
    {
        return (!$this->digits) ?: $this->digits->getValue();
    }
}
