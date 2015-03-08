<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceINIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerServiceKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserINIntegrationGetRequest
 */
class UserINIntegrationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $originatingServiceKey = null;
    protected $terminatingServiceKey = null;


    /**
     * Mobility Manager service key
     */
    public function setOriginatingServiceKey($originatingServiceKey = null)
    {
        $this->originatingServiceKey = ($originatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $originatingServiceKey
             : new MobilityManagerServiceKey($originatingServiceKey);
    }

    /**
     * Mobility Manager service key
     */
    public function getOriginatingServiceKey()
    {
        return (!$this->originatingServiceKey) ?: $this->originatingServiceKey->getValue();
    }

    /**
     * Mobility Manager service key
     */
    public function setTerminatingServiceKey($terminatingServiceKey = null)
    {
        $this->terminatingServiceKey = ($terminatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $terminatingServiceKey
             : new MobilityManagerServiceKey($terminatingServiceKey);
    }

    /**
     * Mobility Manager service key
     */
    public function getTerminatingServiceKey()
    {
        return (!$this->terminatingServiceKey) ?: $this->terminatingServiceKey->getValue();
    }
}
