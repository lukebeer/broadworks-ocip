<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCommunicationBarringGetRequest.
 */
class SystemCommunicationBarringGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $directTransferScreening  = null;


    public function setDirectTransferScreening(xs:boolean $directTransferScreening = null)
    {
    }

    public function getDirectTransferScreening()
    {
        return (!$this->directTransferScreening) ?: $this->directTransferScreening->value();
    }
}
