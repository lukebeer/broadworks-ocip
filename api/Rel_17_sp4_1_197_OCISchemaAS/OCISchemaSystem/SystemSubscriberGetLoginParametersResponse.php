<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemMaxLoginAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemMinLoginIdLength;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the SystemSubscriberGetLoginParametersRequest.
 */
class SystemSubscriberGetLoginParametersResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $maxFailedLoginAttempts,
             $minLoginIdLength
    ) {
        $this->maxFailedLoginAttempts = $maxFailedLoginAttempts;
        $this->minLoginIdLength       = $minLoginIdLength;
        $this->args                   = func_get_args();
    }

    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts)
    {
        $maxFailedLoginAttempts and $this->maxFailedLoginAttempts = new SystemMaxLoginAttempts($maxFailedLoginAttempts);
    }

    public function getMaxFailedLoginAttempts()
    {
        return (!$this->maxFailedLoginAttempts) ?: $this->maxFailedLoginAttempts->value();
    }

    public function setMinLoginIdLength($minLoginIdLength)
    {
        $minLoginIdLength and $this->minLoginIdLength = new SystemMinLoginIdLength($minLoginIdLength);
    }

    public function getMinLoginIdLength()
    {
        return (!$this->minLoginIdLength) ?: $this->minLoginIdLength->value();
    }
}
