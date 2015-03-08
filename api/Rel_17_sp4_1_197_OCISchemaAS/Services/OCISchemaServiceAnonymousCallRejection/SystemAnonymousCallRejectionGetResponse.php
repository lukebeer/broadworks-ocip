<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAnonymousCallRejection; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the SystemAnonymousCallRejectionGetRequest.
 *         The response contains the anonymous call rejection system.".
 */
class SystemAnonymousCallRejectionGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $paiRequired          = null;
    protected $screenOnlyLocalCalls = null;


    /**
     * 
     */
    public function setPaiRequired($paiRequired = null)
    {
        $this->paiRequired = (boolean) $paiRequired;
    }

    /**
     * 
     */
    public function getPaiRequired()
    {
        return (!$this->paiRequired) ?: $this->paiRequired->getValue();
    }

    /**
     * 
     */
    public function setScreenOnlyLocalCalls($screenOnlyLocalCalls = null)
    {
        $this->screenOnlyLocalCalls = (boolean) $screenOnlyLocalCalls;
    }

    /**
     * 
     */
    public function getScreenOnlyLocalCalls()
    {
        return (!$this->screenOnlyLocalCalls) ?: $this->screenOnlyLocalCalls->getValue();
    }
}
