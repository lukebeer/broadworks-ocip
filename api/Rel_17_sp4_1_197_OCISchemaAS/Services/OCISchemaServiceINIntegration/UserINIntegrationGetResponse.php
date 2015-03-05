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
    public    $name = __CLASS__;

    public function __construct(
             $originatingServiceKey=null,
             $terminatingServiceKey=null
    ) {
        $this->originatingServiceKey = new MobilityManagerServiceKey($originatingServiceKey);
        $this->terminatingServiceKey = new MobilityManagerServiceKey($terminatingServiceKey);
        $this->args                  = func_get_args();
    }

    public function setOriginatingServiceKey($originatingServiceKey)
    {
        $originatingServiceKey and $this->originatingServiceKey = new MobilityManagerServiceKey($originatingServiceKey);
    }

    public function getOriginatingServiceKey()
    {
        return (!$this->originatingServiceKey) ?: $this->originatingServiceKey->value();
    }

    public function setTerminatingServiceKey($terminatingServiceKey)
    {
        $terminatingServiceKey and $this->terminatingServiceKey = new MobilityManagerServiceKey($terminatingServiceKey);
    }

    public function getTerminatingServiceKey()
    {
        return (!$this->terminatingServiceKey) ?: $this->terminatingServiceKey->value();
    }
}
