<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemOutgoingCallingPlanGetRequest.
 */
class SystemOutgoingCallingPlanGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE            = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemOutgoingCallingPlanGetResponse';
    public    $name                    = __CLASS__;
    protected $directTransferScreening = null;


    /**
     * 
     */
    public function setDirectTransferScreening($directTransferScreening = null)
    {
        $this->directTransferScreening = (boolean) $directTransferScreening;
    }

    /**
     * 
     */
    public function getDirectTransferScreening()
    {
        return (!$this->directTransferScreening) ?: $this->directTransferScreening->getValue();
    }
}
