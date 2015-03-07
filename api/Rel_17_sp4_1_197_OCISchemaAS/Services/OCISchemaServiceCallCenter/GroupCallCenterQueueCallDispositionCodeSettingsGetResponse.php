<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCodeWithLevel;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupCallCenterQueueCallDispositionCodeSettingsGetRequest.
 */
class GroupCallCenterQueueCallDispositionCodeSettingsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $enableCallDispositionCodes      = null;
    protected $includeOrganizationCodes        = null;
    protected $forceUseOfCallDispositionCodes  = null;
    protected $defaultCallDispositionCode      = null;


    public function setEnableCallDispositionCodes(xs:boolean $enableCallDispositionCodes = null)
    {
    }

    public function getEnableCallDispositionCodes()
    {
        return (!$this->enableCallDispositionCodes) ?: $this->enableCallDispositionCodes->value();
    }

    public function setIncludeOrganizationCodes(xs:boolean $includeOrganizationCodes = null)
    {
    }

    public function getIncludeOrganizationCodes()
    {
        return (!$this->includeOrganizationCodes) ?: $this->includeOrganizationCodes->value();
    }

    public function setForceUseOfCallDispositionCodes(xs:boolean $forceUseOfCallDispositionCodes = null)
    {
    }

    public function getForceUseOfCallDispositionCodes()
    {
        return (!$this->forceUseOfCallDispositionCodes) ?: $this->forceUseOfCallDispositionCodes->value();
    }

    public function setDefaultCallDispositionCode(CallDispositionCodeWithLevel $defaultCallDispositionCode = null)
    {
    }

    public function getDefaultCallDispositionCode()
    {
        return (!$this->defaultCallDispositionCode) ?: $this->defaultCallDispositionCode->value();
    }
}
