<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCodeWithLevel;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupRoutePointQueueCallDispositionCodeSettingsGetRequest.
 */
class GroupRoutePointQueueCallDispositionCodeSettingsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
    protected $enableCallDispositionCodes     = null;
    protected $includeOrganizationCodes       = null;
    protected $forceUseOfCallDispositionCodes = null;
    protected $defaultCallDispositionCode     = null;


    /**
     * 
     */
    public function setEnableCallDispositionCodes($enableCallDispositionCodes = null)
    {
        $this->enableCallDispositionCodes = (boolean) $enableCallDispositionCodes;
    }

    /**
     * 
     */
    public function getEnableCallDispositionCodes()
    {
        return (!$this->enableCallDispositionCodes) ?: $this->enableCallDispositionCodes->getValue();
    }

    /**
     * 
     */
    public function setIncludeOrganizationCodes($includeOrganizationCodes = null)
    {
        $this->includeOrganizationCodes = (boolean) $includeOrganizationCodes;
    }

    /**
     * 
     */
    public function getIncludeOrganizationCodes()
    {
        return (!$this->includeOrganizationCodes) ?: $this->includeOrganizationCodes->getValue();
    }

    /**
     * 
     */
    public function setForceUseOfCallDispositionCodes($forceUseOfCallDispositionCodes = null)
    {
        $this->forceUseOfCallDispositionCodes = (boolean) $forceUseOfCallDispositionCodes;
    }

    /**
     * 
     */
    public function getForceUseOfCallDispositionCodes()
    {
        return (!$this->forceUseOfCallDispositionCodes) ?: $this->forceUseOfCallDispositionCodes->getValue();
    }

    /**
     * Contains a Call Center Call Disposition Code and its Level
     */
    public function setDefaultCallDispositionCode(CallDispositionCodeWithLevel $defaultCallDispositionCode = null)
    {
        $this->defaultCallDispositionCode =  $defaultCallDispositionCode;
    }

    /**
     * Contains a Call Center Call Disposition Code and its Level
     */
    public function getDefaultCallDispositionCode()
    {
        return (!$this->defaultCallDispositionCode) ?: $this->defaultCallDispositionCode->getValue();
    }
}
