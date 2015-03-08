<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAutomaticCallback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackReleaseCause;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemAutomaticCallbackGetReleaseCauseListRequest.
 */
class SystemAutomaticCallbackGetReleaseCauseListResponse extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $releaseCause = null;


    /**
     * Callback Release Cause.
     */
    public function setReleaseCause($releaseCause = null)
    {
        $this->releaseCause = ($releaseCause InstanceOf AutomaticCallbackReleaseCause)
             ? $releaseCause
             : new AutomaticCallbackReleaseCause($releaseCause);
    }

    /**
     * Callback Release Cause.
     */
    public function getReleaseCause()
    {
        return (!$this->releaseCause) ?: $this->releaseCause->getValue();
    }
}
