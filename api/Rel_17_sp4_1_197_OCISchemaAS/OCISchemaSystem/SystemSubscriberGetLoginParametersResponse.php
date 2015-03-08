<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMinLoginIdLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMaxLoginAttempts;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the SystemSubscriberGetLoginParametersRequest.
 */
class SystemSubscriberGetLoginParametersResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE           = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSubscriberGetLoginParametersResponse';
    public    $name                   = __CLASS__;
    protected $maxFailedLoginAttempts = null;
    protected $minLoginIdLength       = null;


    /**
     * Maximum Login Attempts.
     */
    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts = null)
    {
        $this->maxFailedLoginAttempts = ($maxFailedLoginAttempts InstanceOf SystemMaxLoginAttempts)
             ? $maxFailedLoginAttempts
             : new SystemMaxLoginAttempts($maxFailedLoginAttempts);
    }

    /**
     * Maximum Login Attempts.
     */
    public function getMaxFailedLoginAttempts()
    {
        return (!$this->maxFailedLoginAttempts) ?: $this->maxFailedLoginAttempts->getValue();
    }

    /**
     * Minimum Login Id Length.
     */
    public function setMinLoginIdLength($minLoginIdLength = null)
    {
        $this->minLoginIdLength = ($minLoginIdLength InstanceOf SystemMinLoginIdLength)
             ? $minLoginIdLength
             : new SystemMinLoginIdLength($minLoginIdLength);
    }

    /**
     * Minimum Login Id Length.
     */
    public function getMinLoginIdLength()
    {
        return (!$this->minLoginIdLength) ?: $this->minLoginIdLength->getValue();
    }
}
